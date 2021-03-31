<?php

/**
 * Selects fields from the database and returns an associative array
 *
 * @param $db
 * @return array of songs with information about the songs
 */
function getSongs($db) : array
{
    $query = $db->prepare("SELECT `title`, `artist`, `album_name`, `artwork`, `track_preview`, `track_link` FROM `songs`;");

    $query->execute();

    return $query->fetchall();

}

/**
 * Iterates through an array and posts data to an HTML table, wrapping song titles in a link that goes to Spotify, and wrapping the album artwork in a link that goes to a preview of the track
 *
 * @param $songs
 * @return string that can be echoed out to produce an HTML populated with data from the database
 */
function displaySongs($songs) : string
{
    $result = "";

    foreach ($songs as $song) {
        $result .= "<tr>";
        $result .= '<td>' . "<a class='song' href='http://open.spotify.com/track/" . $song["track_link"] . "'/>" . $song["title"] . '</td>';
        $result .= '<td>' . $song["artist"] . '</td>';
        $result .= '<td>' . $song["album_name"] . '</td>';
        $result .='<td>' . "<a href='" . $song["track_preview"] ."'target='_blank'>" . "<img src='" . $song["artwork"] . "' width=175 alt='album art'/>" . '</a></td>';
        $result .= "</tr>";
        }
return $result;
}

