<?php
    function tokenizeText($text) {
        preg_match_all("/\b\w+\b/", preg_replace('/[^\w\s]/', ' ', strtolower($text)), $matches);
        return $matches[0];
    }
    
    function calculateWordFrequencies($text, $stopWords) {
        $words = tokenizeText($text);
        $filteredWords = array_diff($words, $stopWords);
        $wordFrequencies = array_count_values($filteredWords);
        return $wordFrequencies;
    }

    function sortWords($wordFrequencies, $sortingOrder) {
        if ($sortingOrder === 'asc') {
            asort($wordFrequencies);
        } else {
            arsort($wordFrequencies);
        }
        return $wordFrequencies;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputText = $_POST['text'];
        $sortingOrder = $_POST['sort'];
        $limit = (int)$_POST['limit'];

        $stopWords = ["the", "and", "in", "of", "a", "to", "is", "it"];

        $wordFrequencies = calculateWordFrequencies($inputText, $stopWords);
        $sortedWords = sortWords($wordFrequencies, $sortingOrder);

        echo "<h2>Word Frequencies:</h2>";
        echo "<table>";
        echo "<tr><th>Word</th><th>Frequency</th></tr>";

        $counter = 0;
        foreach ($sortedWords as $word => $frequency) {
            if ($counter >= $limit) {
                break;
            }
            echo "<tr><td>$word</td><td>$frequency</td></tr>";
            $counter++;
        }

        echo "</table>";
    }
    ?>