<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Song Lyrics - Turning Green</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <!-- Lyrics Section -->
    <div class="lyrics">
        <?php
        // String variables
    
        $title = "Turning Green";
        $artist = "Maki";
        $mood = "5"; 

        // Numeric variables

        $verseCount = 3;       
        $repeatChorus = 2;   

        // Arrays
        
        $nouns = ["face", "night", "love", "tears", "time", "name", "goodbye", "forever", "help", "you", "perfume", "clothes"];
        $verbs = ["thought", "saw", "feel", "hear", "grow", "wanted", "stay", "saying", "look", "turning", "missing", "remember", "go", "need"];
        $adjectives = ["fine", "same", "green"];

        $songSections = [
            "Verse 1" => "I {$verbs[0]} I {$verbs[1]} your {$nouns[0]} last {$nouns[1]}
It would've been nice to see that you're doing {$adjectives[0]}
Whenever you {$verbs[3]} my {$nouns[5]}
Do you still {$verbs[2]} the {$adjectives[1]} all this {$nouns[4]}?
I guess all my {$nouns[3]} made it {$verbs[4]}
The {$nouns[2]} I {$verbs[0]} I used to know
If I really {$verbs[5]} you to {$verbs[6]}
Why do I keep on {$verbs[7]} {$nouns[6]}",
            
            "Pre-Chorus" => "Uh-oh, I'm starting to {$verbs[8]} for your {$nouns[10]} (On my {$nouns[11]} )
Oh, no, I'm {$verbs[9]} {$adjectives[2]} when I'm {$verbs[10]} you (On my way home)",

            "Chorus" => "The {$nouns[4]} I wasted, and my color blindness
Didn't see it, but it was, it was always {$nouns[9]}
Can we {$verbs[12]} back? 'Cause now I {$verbs[11]}
My {$nouns[7]}, it was, it was always {$nouns[9]}",

            "Outro" => "Hello, where are {$nouns[9]}?
Can {$nouns[9]} come over?
Yeah, I {$verbs[13]} some {$nouns[8]}"
        ];

        // Song info
      
        echo "<div class='song-title'>$title</div>";
        echo "<div class='artist-name'>$artist</div>";

        // Type juggling 
        $moodLevel = $mood + 2;
        echo "<div class='mood-level'>Mood Level: $moodLevel (original mood: '$mood')</div>";

        // Lyrics display for loop
        for ($i = 1; $i <= $verseCount; $i++) {
            $verseKey = "Verse 1";
            echo "<h4>Verse $i</h4>";
            echo "<p>" . nl2br($songSections[$verseKey]) . "</p>";
        }

        echo "<h4 class='prechorus'>Pre-Chorus</h4>";
        echo "<p class='prechorus'>" . nl2br($songSections["Pre-Chorus"]) . "</p>";

        // Repeat chorus
        for ($i = 1; $i <= $repeatChorus; $i++) {
            echo "<h4 class='chorus'>Chorus $i</h4>";
            echo "<p class='chorus'>" . nl2br($songSections["Chorus"]) . "</p>";
        }

        echo "<h4>Outro</h4>";
        echo "<p>" . nl2br($songSections["Outro"]) . "</p>";
        ?>
    </div>
</div>
</body>
</html>
