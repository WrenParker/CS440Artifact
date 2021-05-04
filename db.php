<?php

$hostname = 'localhost';
$database = 'cs440_project';
$username = 'root'; //sohan
$password = ''; //example

error_reporting(E_ALL ^ E_WARNING);

$db = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error)
    die($db->connect_error);

$sql = <<<QUERY
    CREATE TABLE IF NOT EXISTS Artists (
        ArtistID INT NOT NULL AUTO_INCREMENT,
        ArtistName VARCHAR(25) NOT NULL,
        Nationality VARCHAR(25) NOT NULL,
        ActType VARCHAR(25) NOT NULL,
        Founded DATE ,
        labelID VARCHAR(25) NOT NULL,
        PRIMARY KEY (ArtistID),
        INDEX name_index (ArtistName),
        INDEX nat_act_type (Nationality, ActType)
    );
QUERY;

$sql2 = <<<QUERY
    CREATE TABLE IF NOT EXISTS Song (
        SongID INT NOT NULL AUTO_INCREMENT,
        SongTitle VARCHAR(25) NOT NULL,
        Length INT NOT NULL,
        Rating INT NOT NULL,
        AlbumID VARCHAR(25) NOT NULL,
        PRIMARY KEY (SongID),
        INDEX title_index (SongTitle),
        INDEX albumID_index (AlbumID)
    );
QUERY;

$sql3 = <<<QUERY
    CREATE TABLE IF NOT EXISTS Album (
        AlbumID INT NOT NULL AUTO_INCREMENT,
        AlbumTitle VARCHAR(25) NOT NULL,
        Released DATE NOT NULL,
        Genre VARCHAR(25) NOT NULL,
        Length INT NOT NULL,
        ArtistID VARCHAR(25) NOT NULL,
        AlbumCover VARCHAR(100),
        PRIMARY KEY (AlbumID),
        INDEX date_index (Released),
        INDEX title_index (AlbumTitle)
    );
QUERY;


$sql4 = <<<QUERY
    CREATE TABLE IF NOT EXISTS Label (
        LabelID INT NOT NULL AUTO_INCREMENT,
        LabelName VARCHAR(25) NOT NULL,
        Country VARCHAR(25) NOT NULL,
        PRIMARY KEY (LabelID),
        INDEX name_index (LabelName)
    );
QUERY;

$sql5 = <<<QUERY
    CREATE TABLE IF NOT EXISTS AlbumsPublished (
        LabelID VARCHAR(25) NOT NULL,
        AlbumPublished VARCHAR(25) NOT NULL,
        PRIMARY KEY (LabelID, AlbumPublished)
    );
QUERY;
$sql6 = <<<QUERY
    CREATE TABLE IF NOT EXISTS SongLinks (
        SongID VARCHAR(25) NOT NULL,
        Link VARCHAR(50) NOT NULL,
        PRIMARY KEY (SongID, Link)
    );
QUERY;

$sql7 = <<<QUERY
INSERT IGNORE INTO `artists` (`ArtistID`, `ArtistName`, `Nationality`, `ActType`, `Founded`, `labelID`) VALUES
('1', 'Kesha', 'American', 'Solo', '2010-05-12', '1'),
('2', 'Fall Out Boys', 'American', 'Singer-Song Writer', '2003-10-09', '2');
QUERY;


$sql8 = <<<QUERY
INSERT IGNORE INTO `label` (`LabelID`, `LabelName`, `Country`) VALUES 
('1', 'Sony Music Entertainment', 'United States'), 
('2', 'Fueled by Ramen', 'United States');
QUERY;

$sql9 = <<<QUERY
INSERT IGNORE INTO `album` (`AlbumID`, `AlbumTitle`, `Released`, `Genre`, `Length`, `AlbumCover`, `ArtistID`) VALUES 
('1', 'Animal', '2010-01-09', 'Pop', '66', 'https://images-na.ssl-images-amazon.com/images/I/81pcuQeuavL._SL1500_.jpg', '1'), 
('2', 'From Under the Cork Tree', '2005-05-01', 'Rock', '43', 'https://images-na.ssl-images-amazon.com/images/I/81BiD9IY0ZL._SL1200_.jpg', '2');
QUERY;

$sql10 = <<<QUERY
INSERT IGNORE INTO `song` (`SongID`, `SongTitle`, `Length`, `Rating`, `AlbumID`) VALUES 
('1', 'Tik Tok', '3:18', '3.5', '1'), 
('2', 'Sugar We’re Goin Down', '3:49', '4', '2');
QUERY;

$sql10 = <<<QUERY
INSERT IGNORE INTO `songlinks` (`SongID`, `Link`) VALUES 
('1', 'https://open.spotify.com/track/0HPD5WQqrq7wPWR7P7Dw1i?si=e405ef3cf7754cf7\r\n\r\n'), 
('2', 'https://music.apple.com/us/album/sugar-were-goin-down/1440748840?i=1440749374'), 
('2', 'https://open.spotify.com/track/2TfSHkHiFO4gRztVIkggkE?si=8a5dd8348eeb4502');
QUERY;



$db->query($sql);
$db->query($sql2);
$db->query($sql3);
$db->query($sql4);
$db->query($sql5);
$db->query($sql6);
$db->query($sql7);
$db->query($sql8);
$db->query($sql9);
$db->query($sql10);


if ($db->error)
    die($db->error);

?>
