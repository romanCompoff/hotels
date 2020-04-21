<?php
foreach($content as $ucersList){
echo '<div class = "row text-center">';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-1 py-3">';
echo $ucersList['lastTS'];
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-1 py-3">';
echo $ucersList['utm_term'];
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-1 py-3">';
echo '<button type="button" class="btn btn-success" onclick="location.href=\'/\'">';
echo $ucersList['callMethod'];
echo '</button>';
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-1 py-3">';
echo $ucersList['phone'];
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-1 py-3">';
echo '<button type="button" class="btn btn-primary">';
echo $ucersList['status'];
echo '</button>';
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-1 py-3">';
echo $ucersList['profit'];
echo '</div>';
echo '</div>';
}
