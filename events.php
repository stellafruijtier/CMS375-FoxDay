<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox Day Events - View All Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>🦊 Fox Day Events</h1>
        <p class="fox-message">Accio adventure! See which magical Fox Day events await you!</p>
    </header>
    
    <main>
        <nav class="page-nav">
            <a href="index.html">Home</a> | 
            <a href="register.html">Register</a>
        </nav>
        
        <section class="events-container">
            
            <?php
            // Fox Day events stored in PHP array
            $events = [
                [
                    'title' => 'Chamber of Secrets Escape Challenge',
                    'date_time' => '9:00 AM',
                    'location' => 'Knowles Memorial Chapel',
                    'description' => 'Solve riddles and puzzles to escape the Chamber of Secrets. The first to escape wins a prize!'
                ],
                [
                    'title' => 'The Fox\'s Horcrux Hunt',
                    'date_time' => '12:00 PM',
                    'location' => 'Starting at the Alfond Sports Center',
                    'description' => 'Find the Fox\'s Horcrux hidden on campus, the first to find it wins a prize!'
                ],
                [
                    'title' => 'Defense against the Dark Fox',
                    'date_time' => '2:00 PM',
                    'location' => 'Starting at Olin Library',
                    'description' => 'Defend the campus from the Dark Fox, fast mini-games and riddles to protect Fox Day surprise from the Dark Fox!'
                ],
                [
                    'title' => 'Quidditch Tournament on Mills',
                    'date_time' => '4:00 PM',
                    'location' => 'Mills Lawn',
                    'description' => 'Play Quidditch on Mills Lawn, tournament style with prizes for the winners!'
                ]
            ];
            ?>
            <?php
            // Display events
            foreach ($events as $event) {
                echo '<div class="event-card">';
                echo '<h2>' . htmlspecialchars($event['title']) . '</h2>';
                echo '<div class="event-details">';
                echo '<p class="event-time">📅 ' . htmlspecialchars($event['date_time']) . '</p>';
                echo '<p class="event-location">📍 ' . htmlspecialchars($event['location']) . '</p>';
                echo '<p class="event-description">' . htmlspecialchars($event['description']) . '</p>';
                echo '</div>';
                echo '</div>';
            }

            ?>
        </section>
    </main>
    
    <footer>
        <p>🦊 Trust the fox 🦊</p>
        <p>Rollins College - CMS 375</p>
    </footer>
</body>
</html>
