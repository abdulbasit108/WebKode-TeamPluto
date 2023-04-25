<?php
if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $teamname = $_POST['teamname'];
    $teamlead = $_POST['teamleadname'];
    $teamleademail = $_POST['teamleademail'];
    $teamleadno = $_POST['teamleadno'];
    $type = $_POST['options'];
    $team1name = $_POST['team1name'];
    $team1email = $_POST['team1email'];
    $team2name = $_POST['team2name'];
    $team2email = $_POST['team2email'];
    $team3name = $_POST['team3name'];
    $team3email = $_POST['team3email'];
    $batch = $_POST['optradio'];

    $data = array(
        'teamName' => $teamname,
        'teamLead' => $teamlead,
        'teamLeadEmail' => $teamleademail,
        'teamLeadNo' => $teamleadno,
        'teamType' => $type,
        'm1name' => $team1name,
        'm1email' => $team1email,
        'm2name' => $team2name,
        'm2email' => $team2email,
        'm3name' => $team3name,
        'm3email' => $team3email,
        'batch' => $batch);
    $file_open = fopen("form_data.csv", "a");
    fputcsv($file_open, $data);

    header('Location: index.html');
    exit;
    
}
?>
