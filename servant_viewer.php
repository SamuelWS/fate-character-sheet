<?php

# Template Name: Servant Viewer 

if (isset($_GET['servant'])) {
    $id = $_GET['servant'];
} else {
    $id = '';
}

global $wpdb;

$queries = array("name", "align", "str", "end", "agi", "man", "lck", "mrs", "class", "off", "quali", "place", "pfp", "war", "player", "np", "type", "anti", "quote", "weak");

for ($i = 0; $i < count($queries); $i++) {
    ${$queries[$i]} = $wpdb->get_var("SELECT $queries[$i] FROM Servants WHERE tag='$id'");
}

echo "
<div class = 'gold'>
    <div class = 'goldblack'>
      <div class = 'charsheet'>
        <div class = 'column'>
          <div class = 'row border top'>
            <h2 class = 'title'>$name</h2>
            <h4>Played by $player</h4>
            <h5>Placed $place in War $war</h5>
          </div>
          <div class ='row border'>
            <h3 class ='class-attribute' style='float: left'>Class:</h3>
            <h3 style ='float: left'>$class</h3>
            <h4 class = 'off'>$off</h3>
            <h4 class ='class-attribute attr-row' style = 'clear: both; float: left'>Alignment:</h4>
            <h4 class = 'attr-row' style ='float: left'> $align</h4>
            <h5 class ='class-attribute attr-row' style = 'clear: both; float: left'>Strong Qualifications:</h5>
            <h5 class = 'attr-row' style ='float: left'>$quali</h5>
            <h5 class ='class-attribute attr-row' style = 'clear: both; float: left'>Weak Qualifications:</h5>
            <h5 class = 'attr-row' style ='float: left'>$weak</h5>
          </div>
          <div class = 'row border'>
            <div style = 'float: left'>
              <table class='attr-table'>
                <tr>
                  <th class = 'attribute'>Strength: </th>
                  <th>$str</th>
                </tr>
                <tr>
                  <th class = 'attribute'>Agility: </th>
                  <th>$agi</th>
                </tr>
                <tr>
                  <th class = 'attribute'>Magic: </th>
                  <th>$man</th>
                </tr>
              </table>
            </div>
            <div style = 'float:right'>
              <table>
                <tr>
                  <th class = 'attribute'>Endurance: </th>
                  <th>$end</th>
                </tr>
                <tr>
                  <th class = 'attribute'>Luck: </th>
                  <th>$lck</th>
                </tr>
                <tr>
                  <th class = 'attribute'>Magic Res: </th>
                  <th>$mrs</th>
                </tr>
              </table>
            </div>
          </div>
          <div class = 'row border bottom'>
            <h3 class = 'title'>$np</h3>
            <h4>Type: $type Anti-$anti</h4>
          </div>
        </div>
        <div class = 'column'>
          <img class = 'servant-pfp border' src = '$pfp'>
          <div class = 'rowright border bottom'>
            <h5>\"$quote\"</h5>
          </div>
        </div>
        <div class = 'shimmer'></div>
      </div>
    </div>
  </div>
";
?>

<style>
@import url('https://fonts.cdnfonts.com/css/luminari');

* {
  font-family: 'Luminari', monospace;
  color: white;
  text-shadow: 1px 1px 2px black;
}

.column {
  float: left;
  display: flex;
  flex-direction:column;
  justify-content: space-between;
  height: 450px;
}

.border {
  border-radius: 5px;
  border-color: lightgray;
  border-width: 2px;
  border-style: solid;
}

.gold {
  background: linear-gradient(-180deg, #FCE9AC 0%, #F8E099 40%, #734D00 50%, #FDE7A6 60%, #FCFAC8 100%);
  box-shadow: inset 0 0 3px 0 rgba(69,2,2,0.67);
  border-radius: 10px;
  border: 1px solid #FFFFFF;
  display: inline-block;
  width: 710px;
  height: 500px;
  padding: 5px;
  text-decoration: none;
}

.goldblack {
  background: #000;
  display: block;
  width: 710px;
  height: 500px;
  border-radius: 8px;
}

.charsheet{
  position: relative;
  border-radius: 5px;
  padding: 15px 15px 15px 15px;
  text-align: left;
  float: left;
  display: flex;
  justify-content: space-between;
  margin: 0 auto;
  background-image: linear-gradient(#00003d, darkblue);
  width: 680px;
  height: 470px;
  overflow: hidden;
  animation: fadeIn 2s; 
}

.servant-pfp {
  width: 300px;
  height: 100%;
  margin: 10px;
  object-fit: cover;
  overflow: hidden;
}

.top {
  margin-top: 10px !important;
}

.bottom {
  margin-bottom: 10px !important;
}

.row {
  display: block;
  padding: 0px 15px;
  text-align: left;
  display: table;
  margin: 0 10px;
  background-color: rgba(0, 180, 180, 0.5);
  width: 300px;
}

.rowright {
  display: block;
  padding: 0px 15px;
  text-align: center;
  display: table;
  margin: 0 10px;
  background-color: rgba(0, 180, 180, 0.5);
}

@keyframes fadeIn {
  0% { opacity: 0; }
  50% {opacity: 0; }
  100% { opacity: 1; }
}

.shimmer {
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: linear-gradient(100deg,
    rgba(255, 255, 255, 0) 20%,
    rgba(255, 255, 255, 0.35) 50%,
    rgba(255, 255, 255, 0) 80%);
  
  animation: shimmer 10s infinite linear;
}

@keyframes shimmer {
  0% {
    transform: translateX(-300%);
  }
  10% {
    transform: translateX(-300%);
  }
  20%{
    transform: translateX(300%);
  }
  100% {
    transform: translateX(300%);
  }
}

h2, h3, h4, h5 {
  margin: 8px 5px 8px 5px;
}

.off {
  margin-top: 11px;
}

.attr-table{
    padding: 0 0.3em;
}

th {
  text-align: left;
}

.attribute {
  color: #FFD580;
}

.class-attribute {
  color: #C0C0C0;
}

.title {
  color: skyblue;
}

.attr-row {
  margin-top: 0px;
}
</style>