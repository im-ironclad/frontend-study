<?php

  # TODO: Make activityLink structure dynamic to all folders inside the base Activity directory

  $dirResult = scandir('./');
  $activityLinks = [];

  forEach($dirResult as $thing) {
    if ($thing === 'Activities') {
      array_push($activityLinks, $thing);
    }
  }

  echo $activityLinks[0];

?>