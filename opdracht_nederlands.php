<?php include_once('core/autoload.php');?>
<?php include_once('isloggedIn.inc.php');?>
<?php 
  $course = User::getSubjectById($_GET['subject_id']);
  $assignments = User::getAssignmentsById($_GET['class_id'], $_GET['subject_id']);

    if(isset($_GET['class_id'])) {
        $class = $_GET['class_id'];
    } else {
        $class = "klas";
    }
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/opdrachten.css">
  <title>Opdrachten <?php echo $course['name']; ?></title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
  <nav>
    <a href="opdrachten.php?class_id=<?php echo $class; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 619.05 307.48">
        <defs>
          <style>
            .cls-1 {
              fill: #f4d600;
            }

            .cls-2 {
              fill: #fef6e9;
            }
          </style>
        </defs>
        <title>alternatief-logo</title>
        <g id="Laag_1" data-name="Laag 1">
          <path class="cls-1"
            d="M161.64,283.37q17.24-4.83,34.79-8.39l-8.27,1.67a516,516,0,0,1,65.64-8.86l-7.7.53C266.56,266.91,287,267,307.53,267q31.23,0,62.46.41,62.65.83,125.3,3.27,35.19,1.37,70.38,3.26a45.73,45.73,0,0,0,11.83-1.37A51.07,51.07,0,0,0,589.63,269a37.24,37.24,0,0,0,9.73-5.32,23.45,23.45,0,0,0,6.82-6.08c2.28-3.61,4-8.25.17-11.72-4.39-4-10.76-4.38-16.33-4.68q-83.74-4.5-167.6-6.09-41.49-.78-83-.85c-29.65,0-59.17.13-88.72,2.89a548.89,548.89,0,0,0-96.65,17.94c-7,2-14.9,5.09-20.53,9.94-2.79,2.41-8,7.9-6.28,12.4,1.79,4.79,6.93,6.87,11.64,7.6a54.66,54.66,0,0,0,22.75-1.66Z" />
          <path class="cls-2"
            d="M83.76,35.16a43.09,43.09,0,0,1,14.5,2.6q10.9,4.91,10.9,10.1c.33,0,1,.87,2.1,2.6V54l.5,2.6a2.71,2.71,0,0,0-.5,1.3,2.71,2.71,0,0,1,.5,1.3q-4.61,16-9.2,18.3v.9q6.8,1.31,13.5,7.4,0,1.09,4,4.8l2.6,7.9a65.56,65.56,0,0,1-4.4,22.2l-7,10.9-10,9.2q-18.49,13.1-28.8,13.1H69l-13.1-4.8q0-2-5.2-5.7a12.51,12.51,0,0,1-3.1-7.8c-.27,0-.4-.17-.4-.5a15.45,15.45,0,0,0,.9-3.9v-1.3a66.3,66.3,0,0,0-.9-10.5h.4c-.53-5.53-1.27-8.3-2.2-8.3l.5-3v-1.8L45,105a47.78,47.78,0,0,0-2.6-16.1,3.91,3.91,0,0,1,.4-1.8q-1.09-2.4-3-14.8-2.59-7.1-5.7-18.3v-.5c1.27-3.2,2.73-4.8,4.4-4.8q0-2,8.3-3h.8q3.11,1.91,3.1,4.3a36.45,36.45,0,0,1,13.1-10q1.3-1.5,10.4-3.9h.5a.35.35,0,0,1,.4.4,4.58,4.58,0,0,1,2.2-.9,2.71,2.71,0,0,1,1.3.5A18.49,18.49,0,0,1,83.76,35.16ZM60.66,74v.5q0,3.71-.4,7.8l.4,2.6h.9q1.69-2.3,14.4-6.1,17.9-10.1,17.9-23.1c-.93-2.6-2-3.9-3.1-3.9q-20.51,1.1-20.5,5.2a24.16,24.16,0,0,0-7.8,10.5C62.46,70.33,61.86,72.49,60.66,74Zm11.4,27.1q-5.9,0-7.5-2.6H62a.82.82,0,0,0-.8.9l1.7,13.5-.4.9a7.24,7.24,0,0,1,.8,3l-.4.9q.7,1.91,2.2,13.9,1,6.6,3.9,6.6h1.3l1.3-.9,1.8.5q12.11-2.7,24.4-16.6a64.43,64.43,0,0,0,6.6-11.8l-.5-.9c.33-4.07.63-6.23.9-6.5a9.34,9.34,0,0,0-4.4-7.9h-3.5a24.39,24.39,0,0,1-3.9-.4q-14,1.5-17.4,4.8C73.89,100.19,72.73,101.06,72.06,101.06Z" />
          <path class="cls-2"
            d="M193.9,70.66h1.6q2.4,0,12,6.8l9.2,10q0,1.2,4.4,8c1.6,5.07,2.4,8.13,2.4,9.2l-.4.8.4,2.4v1.2a3.14,3.14,0,0,1-.4,1.6l.4.8q0,3.3-3.6,14.8a35.86,35.86,0,0,1-8,9.6q-15.79,13.2-30.8,13.2a91.15,91.15,0,0,1-20-6.8q-.3-1.2-4-2,0-2-2.8-3.2,0-1.5-5.2-4.4-4-6-4-8-1.6-3.3-2.4-10.4a68.37,68.37,0,0,1,4-15.2q8.2-9.19,8.8-9.2,2.3-3.6,4.8-4,3.9-3.3,6.8-3.6,4.5-4.8,6.4-4.8,8.7-5.59,10.4-5.6A34.1,34.1,0,0,1,193.9,70.66Zm-16.8,29.2a3,3,0,0,1,.4,1.2,7.07,7.07,0,0,1-6,3.2.35.35,0,0,1-.4.4h-.4l-6-2.4a27.73,27.73,0,0,0-5.2,9.6l.4,2.4a3,3,0,0,0-.4,1.2q.6,0,1.6,4.8,9,10.39,14.4,10.4c0,.2.67.6,2,1.2h7.2q5.9-.3,15.2-7.2a19,19,0,0,0,7.2-15.2,6.23,6.23,0,0,1-.8-2.4.71.71,0,0,0,.8-.8,63.18,63.18,0,0,1-2.8-8q-7.31-10.4-11.2-10.4h-.4q-14.8,5.4-14.8,11.2C177.37,99.13,177.1,99.39,177.1,99.86Z" />
          <path class="cls-2"
            d="M254.54,77.06q3,0,6.5,4.6a27.9,27.9,0,0,1,.7,6.4v3.5c0,1.27-.23,1.9-.7,1.9a52,52,0,0,1,.7,8.8v3.8l1.9,11.8q3.5,11.1,7.3,11.1,2,1.31,9.5,3h3.5q8.3-3.19,8.8-3.8l.3-.7.8.3h.4q0-1,4.2-4.2,3.8-5.2,3.8-7.2v-5.7a22.41,22.41,0,0,0-.8-3.1h.4a27,27,0,0,0-1.5-4.6,2.42,2.42,0,0,0,.4-1.1q-1.2-4.9-1.2-16.4a10.93,10.93,0,0,1,5.4-3.8,7.75,7.75,0,0,1,4.9-2.7q2.4,0,5.4,5.7c.2,2.27.57,3.67,1.1,4.2v1.2a3,3,0,0,1-.4,1.5l1.6,4.2-.4.7q.71,1.61,1.5,8.1v.3c0,1.33-.23,2-.7,2q0,10,5.3,30.1a.35.35,0,0,1-.4.4l.4,1.9v5.3a4,4,0,0,1-2.3,2,3,3,0,0,0-1.5-.4c0,.47-.27.7-.8.7h-1.5l-1.2-.7-2.6.4q-6.1-4.5-6.1-7.3l-.4-1.9H306a36.87,36.87,0,0,1-4.6,3c-.33,1.07-.7,1.6-1.1,1.6l-.8-.4a40.59,40.59,0,0,1-13,5.3,35,35,0,0,1-5.3.8h-.8a3,3,0,0,1-1.5-.4.35.35,0,0,0-.4.4q-4.31,0-9.5-3.1l-.8.4c0-.47-1.27-1.23-3.8-2.3q-8.7-5.1-12.2-12.6-3.11-6.5-4.6-17.9v-2.7l-.8-1.1v-5l-.7-1.1.7-1.2v-5.7a2.66,2.66,0,0,1-.7-1.5c.27-1.87.4-2.9.4-3.1l-.8-.4q0-8.7,3.4-8.7.11-.6,4.6-3.1Z" />
          <path class="cls-2"
            d="M426.68,81.56l2.8.8a4.7,4.7,0,0,1,2.4-.8q9.6,9.5,9.6,12.4,1.61,1.5,5.2,10.8a64.45,64.45,0,0,1,2,7.6,4,4,0,0,1-.4,2,20.71,20.71,0,0,1,.4,3.6v.8q0,5.1-5.2,18-1.31,3.5-8.8,9.6-3.71,4-16.4,6h-1.6q-11.6-1.8-16.4-6-1.8,0-6-4-9.4,13.6-18.8,13.6h-4.4a8,8,0,0,0-4.4-2,3.14,3.14,0,0,1-1.6.4q0-.71-7.2-4-7.61-9.3-7.6-14-1.2-1.8-4.8-30.8a3.14,3.14,0,0,0,.4-1.6,41.17,41.17,0,0,0-2-8v-.4q0-5.59,10-9.2V86q4.1,0,6,5.2,1.69,0,3.2,10.8l-.4.8a30.89,30.89,0,0,0,1.2,6.4,3,3,0,0,1-.4,1.2,20.71,20.71,0,0,1,.4,3.6v2.8q2.7,18.79,4,18.8,0,.3,3.6,4,5.81,0,11.2-13.6,3.6-9.49,3.6-14.8a3,3,0,0,0-.4-1.2,3,3,0,0,0,.4-1.2c0-.27-.53-2.13-1.6-5.6q0-4,8-8.8a3,3,0,0,0,1.6-.8h1.6q5.1,0,6.8,6,1,0,1.2,5.2l-.8,6c.27,5.6.53,8.4.8,8.4l.8.4-.4,2v2.8a21.87,21.87,0,0,1,1.6,5.2q4.9,5.4,9.2,6l2.4-.4v.4q12-5.3,12-10.8a13.63,13.63,0,0,0,2.4-8.4,35.68,35.68,0,0,0-6-17.6,41.48,41.48,0,0,1-4.8-6.4A12.15,12.15,0,0,1,426.68,81.56Z" />
          <path class="cls-2"
            d="M176,182.32a9.73,9.73,0,0,0,3.2.8,3.08,3.08,0,0,0,1.2-.4q8.4.9,12,3.6a29.91,29.91,0,0,1,2,4.8q0,7.5-3.6,9.2a17.07,17.07,0,0,0-4,.8h-.4l-5.6-2.8q-11.61,0-11.6,5.2,6.39,15.21,10.8,16l5.6,3.2q10,7.11,10,10l2.4,5.2a47.13,47.13,0,0,0,.4,5.2,6.06,6.06,0,0,0-.8,2.4l.4.8q-2,10-6.4,16-9.4,10-18.8,10-15.6-.69-15.6-7.6v-.4q1.29-.39,2.4-4.4l6-4.8c.06-.53.33-.8.8-.8h.8a5.2,5.2,0,0,1,3.2,1.6h2.8q9.2-1.8,9.2-12.8-2.2-6-5.2-6-.4-1.59-10-7.2-8-6.39-8-9.6-1.9,0-4.8-9.2-.3-4.5-1.2-6,0-10.89,11.2-18.8A85.31,85.31,0,0,1,176,182.32Z" />
          <path class="cls-2"
            d="M237.87,153.52q5.19,2.5,5.2,9.6a41,41,0,0,1,.8,8v13.5a6.26,6.26,0,0,0,.8,3.2,106.25,106.25,0,0,1,13.9-2c0-.26.26-.4.8-.4q3.6,0,3.6,2.4a14.8,14.8,0,0,1,1.2,3.6c0,.54-.94,2.27-2.8,5.2,0,.67-1.07,1.34-3.2,2q-.51,1.6-15.1,5.5a11.18,11.18,0,0,1-.4,2.8.35.35,0,0,0,.4.4l-.4,2c.26,1.4.4,2.2.4,2.4-.54.07-.8.34-.8.8v10a25,25,0,0,0,3.6,12.7q4,7.6,10.3,7.6c.06.54.33.8.8.8q8.49-2.6,11.6-8.4,3.6,0,5.1-4,.6-3.09,4.8-3.9a1.06,1.06,0,0,1,1.2-1.2q3.6.51,3.6,2.8l1.6,2.3v.4q-.71,1-1.6,6l-4,7.2q-4.11,6.9-13.1,11.9c0,.54-2.67,1.2-8,2l-.8-.4a3.15,3.15,0,0,0-1.2.4q-12.21,0-23.1-12.3a50.2,50.2,0,0,1-7.2-26.7l.4-.8a3.12,3.12,0,0,1-.4-1.6c0-1.33.26-2,.8-2a19.7,19.7,0,0,1-.4-3.2c0-.33.13-1.66.4-4h-.8c-2.6.54-4.07.8-4.4.8h-3.1a15,15,0,0,0-6-3.2q-3.6-3.5-3.6-4.3,0-4.89,6.4-8.4,3.6-.3,3.6-1.2l1.6.4a55.61,55.61,0,0,0,7.1-.8c0-1.4.13-4.06.4-8l-.4-5.5h.4a.36.36,0,0,0-.4-.4l.4-2.8c0-.2-.14-1.93-.4-5.2l.4-.8a57.52,57.52,0,0,1-1.2-8.8q4.1-5.59,9.2-5.6C235.87,153.86,236.53,153.59,237.87,153.52Z" />
          <path class="cls-2"
            d="M340.61,183.72c1.4,0,2.1.27,2.1.8a4.65,4.65,0,0,1,2.4-.8l8.1,2.8a34.29,34.29,0,0,1,11,9.4,58.46,58.46,0,0,1,7.3,16.2q0,4-4.9,12.2-2.4,3.3-3.2,3.3t-12.6,5.3q-6.4,2.4-19.1,3.2l-2.5-.4v.4a36,36,0,0,0,9,9.8,33.9,33.9,0,0,0,16.6,4.4,12.78,12.78,0,0,0,4.1-1.2,3,3,0,0,0,1.2.4c.13-.53.4-.8.8-.8h1.3q3.6,0,13-2.8h1.2l3.2,3.6q0,6.21-7.3,12.2,0,1.5-15.8,4.9c-.2,0-1-.13-2.5-.4l-1.6.4q-11.21,0-23.6-7.3-11-8.49-16.2-16.7-4.2-11.9-4.9-12.2-6.9-3.6-6.9-7.7v-.4a23.19,23.19,0,0,1,.8-3.2v-1.3h1.6l1.3.9a4.26,4.26,0,0,0,3.2-4.5q0-9.09,9.4-20.7a33.07,33.07,0,0,1,12.6-7.8l2.4-1.2h3.6Zm-15,35.8a6.14,6.14,0,0,0,4.1,1.2,11.79,11.79,0,0,0,1.6-.4.36.36,0,0,1,.4.4l2-.4h4.1a31,31,0,0,0,9.7-3.3q6.39-4.5,6.5-5.7-3.6-8.9-6.9-8.9Q346,201,338.61,200a.36.36,0,0,0-.4-.4q-11.81,3.7-11.8,13.4C325.87,213,325.61,215.19,325.61,219.52Z" />
          <path class="cls-2"
            d="M441.75,183.72c1.4,0,2.1.27,2.1.8a4.65,4.65,0,0,1,2.4-.8l8.1,2.8a34.29,34.29,0,0,1,11,9.4,58.46,58.46,0,0,1,7.3,16.2q0,4-4.9,12.2-2.4,3.3-3.2,3.3t-12.6,5.3q-6.4,2.4-19.1,3.2l-2.5-.4v.4a36,36,0,0,0,9,9.8,33.9,33.9,0,0,0,16.6,4.4,12.78,12.78,0,0,0,4.1-1.2,3,3,0,0,0,1.2.4c.13-.53.4-.8.8-.8h1.3q3.6,0,13-2.8h1.2l3.2,3.6q0,6.21-7.3,12.2,0,1.5-15.8,4.9c-.2,0-1-.13-2.5-.4l-1.6.4q-11.21,0-23.6-7.3-11-8.49-16.2-16.7-4.2-11.9-4.9-12.2-6.9-3.6-6.9-7.7v-.4a23.19,23.19,0,0,1,.8-3.2v-1.3h1.6l1.3.9a4.26,4.26,0,0,0,3.2-4.5q0-9.09,9.4-20.7a33.07,33.07,0,0,1,12.6-7.8l2.4-1.2h3.6Zm-15,35.8a6.14,6.14,0,0,0,4.1,1.2,11.79,11.79,0,0,0,1.6-.4.36.36,0,0,1,.4.4l2-.4H439a31,31,0,0,0,9.7-3.3q6.39-4.5,6.5-5.7-3.6-8.9-6.9-8.9-1.11-1.39-8.5-2.4a.36.36,0,0,0-.4-.4q-11.81,3.7-11.8,13.4C427,213,426.75,215.19,426.75,219.52Z" />
          <path class="cls-2"
            d="M546.19,186.52a34.18,34.18,0,0,0,6.8,1.2,3.15,3.15,0,0,1,1.2-.4q0,.41,12,4,8.59,3.6,13.2,15.2a116.76,116.76,0,0,1,2.8,16c.53.07.8.34.8.8a4.61,4.61,0,0,0-.8,2.4,71.34,71.34,0,0,1,2.8,18.4q0,8.81-6.4,8.8c0-.8-1.74-1.33-5.2-1.6q-4-2.1-4-4.8-.81,0-3.6-20.4,0-5.3-4.4-17.6-6.4-4.4-12.4-4.4a3.08,3.08,0,0,1-1.2.4,3.26,3.26,0,0,0-1.2-.4q-9.6,1.71-10.4,4a25.58,25.58,0,0,0-5.6,7.6l.4.8v.4c-.94,1.4-1.87,4.34-2.8,8.8a3.26,3.26,0,0,1,.4,1.2c-.27,1.87-.4,2.94-.4,3.2l.4.8-.8,1.6.4,2.8-.4.8q1.1,7.41,2,8.4v1.2l-1.2,1.6a6.23,6.23,0,0,1,.8,2.4c-.87,0-1.54,1.34-2,4l-1.6,1.2h-2.4q-6.1,0-12-6.8v-.4c.06-1.86.33-2.8.8-2.8a3,3,0,0,1-.4-1.2q-2.7-26.1-8.8-38,1.69-5.59,5.6-5.6a7.26,7.26,0,0,1,4.4-2.8h3.2a4,4,0,0,1,2.4,3.6h1.2a30.68,30.68,0,0,1,15.6-12.8,16.63,16.63,0,0,0,4-.8H545Z" />
        </g>
      </svg></a>
    <a href="opdrachten.php?class_id=<?php echo $class; ?>" style="background-color: #F6F6F6; color: #16AC9C;">Opdrachten</a>
    <a href="leerlingen.php?class_id=<?php echo $class; ?>">Leerlingen</a>
    <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="31.5" viewBox="0 0 36 31.5">
        <path id="Icon_open-account-logout" data-name="Icon open-account-logout"
          d="M13.5,0V4.5h18V27h-18v4.5H36V0ZM9,9,0,15.75,9,22.5V18H27V13.5H9Z" fill="#f6f6f6" />
      </svg>Uitloggen</a>
  </nav>

  <section>
    <div class="leerlingen" style="border: none; padding: 0;">
      <a class="btn_no_style arrow_back" href="javascript:history.back()"><svg xmlns="http://www.w3.org/2000/svg"
          width="7.5" height="15" viewBox="0 0 7.5 15">
          <path id="Icon_material-arrow-drop-down" data-name="Icon material-arrow-drop-down"
            d="M10.5,15,18,22.5,25.5,15Z" transform="translate(22.5 -10.5) rotate(90)" fill="#16ac9c" />
        </svg>vakken</a>
      <h1><?php echo $course['name']; ?></h1>
      <table class="leerlingen lopende" style="border-radius: 4px; width: 100%;">
        <col style="width: 50%;">
        <col style="width: 15%;">
        <col style="width: 20%;">
        <col style="width: 15%">
        <th colspan="3"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
              <g id="Polygon_1" data-name="Polygon 1" transform="translate(20 17) rotate(180)">
                <path
                  d="M 19.12578964233398 16.5 L 0.8742111921310425 16.5 L 10 0.9861590266227722 L 19.12578964233398 16.5 Z"
                  stroke="none" />
                <path
                  d="M 10 1.97230052947998 L 1.7484130859375 16 L 18.2515869140625 16 L 10 1.97230052947998 M 10 0 L 20 17 L 0 17 L 10 0 Z"
                  stroke="none" fill="#707070" />
              </g>
            </svg></a> Lopende opdrachten</th>
        <th colspan="1"><a href="opdracht_toevoegen.php?class_id=<?php echo $_GET['class_id']; ?>&subject_id=<?php echo $_GET['subject_id']; ?>" class="dropdown"><svg
              xmlns="http://www.w3.org/2000/svg" width="22.5" height="22.5" viewBox="0 0 22.5 22.5">
              <path id="Icon_ionic-md-add" data-name="Icon ionic-md-add"
                d="M29.25,19.5H19.5v9.75h-3V19.5H6.75v-3H16.5V6.75h3V16.5h9.75Z" transform="translate(-6.75 -6.75)"
                fill="#16ac9c" />
            </svg></a></th>
        <?php if(!empty($assignments)): ?> 
        <?php foreach($assignments as $assignment): ?>
        <?php if($assignment['due_date'] >= date("Y-m-d")): ?>
        <tr>
          <td><?php echo $assignment['name']; ?></td>
          <td>tg. <?php echo date_format(date_create($assignment['due_date']),"d/m/Y"); ?></td>
          <td><a href="opdracht_beoordelen.php?assignment_id=<?php echo $assignment['id']; ?>&class_id=<?php echo $class; ?>&subject_id=<?php echo $_GET['subject_id']; ?>" class="btn_no_style"
              style="margin: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="28.5" viewBox="0 0 30 28.5">
                <g id="Group_1" data-name="Group 1" transform="translate(-1462.5 -343.75)">
                  <path id="Icon_material-grade" data-name="Icon material-grade"
                    d="M7.215,25.905,3,12.945,7.215,3l4.215,9.945,10.785.915-8.19,7.1L16.485,31.5Z"
                    transform="translate(1470.285 340.75)" />
                  <path id="Icon_material-grade-2" data-name="Icon material-grade"
                    d="M33,25.905,23.73,31.5l2.46-10.545L18,13.86l10.785-.915Z" transform="translate(1444.5 340.75)"
                    fill="#ffd706" />
                </g>
              </svg><span>beoordeel</span></a></td>
          <td><a href="opdracht_aanpassen.php?assignment_id=<?php echo $assignment['id']; ?>&class_id=<?php echo $class; ?>&subject_id=<?php echo $_GET['subject_id']; ?>" class="btn_no_style"
              style="margin: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="24.657" height="23.6"
                viewBox="0 0 24.657 23.6">
                <g id="Icon_feather-edit-3" data-name="Icon feather-edit-3" transform="translate(-3 -2.818)">
                  <path id="Path_3" data-name="Path 3" d="M18,30H28.829" transform="translate(-2.671 -5.082)"
                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                  <path id="Path_4" data-name="Path 4"
                    d="M20.743,5.066a2.552,2.552,0,1,1,3.61,3.61L9.313,23.715,4.5,24.918l1.2-4.813Z" fill="none"
                    stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                </g>
              </svg><span>pas aan</span></a></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
            <td>
            Er zijn geen lopende opdrachten gevonden.
            </td>
          </tr>
        <?php endif; ?>
      </table>
      <table class="leerlingen" style="border-radius: 4px; width: 100%;">
        <col style="width: 50%;">
        <col style="width: 15%;">
        <col style="width: 20%;">
        <col style="width: 15%">
        <th colspan="4"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
              <g id="Polygon_1" data-name="Polygon 1" transform="translate(20 17) rotate(180)">
                <path
                  d="M 19.12578964233398 16.5 L 0.8742111921310425 16.5 L 10 0.9861590266227722 L 19.12578964233398 16.5 Z"
                  stroke="none" />
                <path
                  d="M 10 1.97230052947998 L 1.7484130859375 16 L 18.2515869140625 16 L 10 1.97230052947998 M 10 0 L 20 17 L 0 17 L 10 0 Z"
                  stroke="none" fill="#707070" />
              </g>
            </svg></a> Afgelopen opdrachten</th>
            <th></th>
        <?php if(!empty($assignments)): ?>
        <?php foreach($assignments as $assignment): ?>
        <?php if($assignment['due_date'] < date("Y-m-d")): ?>
        <tr>
          <td><?php echo $assignment['name']; ?></td>
          <td colspan="2"><?php echo date_format(date_create($assignment['due_date']),"d/m/Y"); ?></td>
          <td colspan="1"><a href="opdracht_bekijken.php?assignment_id=<?php echo $assignment['id']; ?>&class_id=<?php echo $class; ?>&subject_id=<?php echo $_GET['subject_id']; ?>" class="btn_no_style"
              style="margin: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 30 20">
          <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M29.819,13.74A16.7,16.7,0,0,0,15,4.5,16.708,16.708,0,0,0,.181,13.74a1.685,1.685,0,0,0,0,1.52A16.7,16.7,0,0,0,15,24.5a16.708,16.708,0,0,0,14.819-9.24A1.685,1.685,0,0,0,29.819,13.74ZM15,22a7.5,7.5,0,1,1,7.5-7.5A7.5,7.5,0,0,1,15,22ZM15,9.5a4.964,4.964,0,0,0-1.318.2A2.492,2.492,0,0,1,10.2,13.182,4.989,4.989,0,1,0,15,9.5Z" transform="translate(0 -4.5)"/>
        </svg><span>bekijken</span></a></td>

        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td>
            Er zijn geen afgelopen opdrachten gevonden.
            </td>
          </tr>
        <?php endif; ?>

      </table>
    </div>
  </section>

</body>

</html>