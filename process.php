<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation - Fox Day</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>🦊 Fox Day Registration</h1>
    </header>
    
    <main>
        <?php
        $student_name = isset($_POST['student_name']) ? trim($_POST['student_name']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $event = isset($_POST['event']) ? trim($_POST['event']) : '';
        $year = isset($_POST['year']) ? trim($_POST['year']) : '';
        $house = isset($_POST['house']) ? trim($_POST['house']) : '';
        $message = isset($_POST['message']) ? trim($_POST['message']) : '';
        $secret_promise = isset($_POST['secret_promise']) ? $_POST['secret_promise'] : '';
        
        // Validate required fields
        $errors = [];
        
        if (empty($student_name)) {
            $errors[] = "Student name is required.";
        }
        
        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please enter a valid email address.";
        }
        
        if (empty($event)) {
            $errors[] = "Please select an event.";
        }
        
        if (empty($house)) {
            $errors[] = "Please select a house.";
        }
        
        // If field is missing, show error message
        if (!empty($errors)) {
            echo '<div class="error-message">';
            echo '<h2>⚠️ Registration Error</h2>';
            echo '<p>The following errors were found:</p>';
            echo '<ul>';
            foreach ($errors as $error) {
                echo '<li>' . htmlspecialchars($error) . '</li>';
            }
            echo '</ul>';
            echo '<p><a href="register.html" class="back-link">← Return to Registration Form</a></p>';
            echo '</div>';
        } else {
            // If all required fields are present, display confirmation
            echo '<div class="confirmation-message">';
            echo '<h2>🎉 Welcome to Fox Day! Your adventure is booked! 🦊</h2>';
            echo '<p class="confirmation-intro">We\'re so excited to have you join us! Here are your registration details:</p>';
            
            echo '<div class="confirmation-details">';
            echo '<div class="detail-item">';
            echo '<strong>Name:</strong> ' . htmlspecialchars($student_name);
            echo '</div>';
            
            echo '<div class="detail-item">';
            echo '<strong>Email:</strong> ' . htmlspecialchars($email);
            echo '</div>';
            
            echo '<div class="detail-item">';
            echo '<strong>Event:</strong> ' . htmlspecialchars($event);
            echo '</div>';
            
            echo '<div class="detail-item">';
            echo '<strong>Year:</strong> ' . htmlspecialchars($year);
            echo '</div>';

            echo '<div class="detail-item">';
            echo '<strong>House:</strong> ' . htmlspecialchars($house);
            echo '</div>';  
            
            if (!empty($message)) {
                echo '<div class="detail-item">';
                echo '<strong>Your Message:</strong> ' . htmlspecialchars($message);
                echo '</div>';
            }
            
            if ($secret_promise === 'yes') {
                echo '<div class="detail-item promise">';
                echo '✅ You\'ve promised to keep the Fox Day surprise secret!';
                echo '</div>';
            }
            
            echo '</div>';
            
            // Message based on selected event
            $event_messages = [
                'Chamber of Secrets Escape Challenge' => 'Get ready for an adventure! Make sure to arrive on time at Knowles Memorial Chapel.',
                'The Fox\'s Horcrux Hunt' => 'Get ready to hunt for the Fox\'s Horcrux! Make sure to arrive on time at the Alfond Sports Center.',
                'Defense against the Dark Fox' => 'Get ready to defend the campus from the Dark Fox! Make sure to arrive on time at Olin Library.',
                'Quidditch Tournament on Mills' => 'Get ready to play Quidditch! Make sure to arrive on time at Mills Lawn.',
            ];
            
            if (isset($event_messages[$event])) {
                echo '<div class="event-tip">';
                echo '<p><strong>💡 Tip:</strong> ' . $event_messages[$event] . '</p>';
                echo '</div>';
            }
            
            echo '<div class="confirmation-footer">';
            echo '<p><a href="index.html" class="back-link">← Return to Home</a> | <a href="events.php" class="back-link">View All Events</a></p>';
            echo '</div>';
            
            echo '</div>';
        }
        ?>
    </main>
    
    <footer>
        <p>🦊 Keep the Fox Day spirit alive! 🦊</p>
        <p>&copy; 2026 Rollins College - CMS 375</p>
    </footer>
</body>
</html>
