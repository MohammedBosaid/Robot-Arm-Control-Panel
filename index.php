<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Robot Arm Control Panel</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>

  <h2>Robot Arm Control Panel</h2>

  <div class="sliders">
    <?php for ($i = 1; $i <= 6; $i++): ?>
      <label for="motor<?= $i ?>">Motor <?= $i ?>:</label>
      <input type="range" min="0" max="180" value="90" id="motor<?= $i ?>" oninput="updateLabel(this)">
      <span id="label<?= $i ?>">90</span>
      <br>
    <?php endfor; ?>
  </div>

  <button onclick="resetSliders()">Reset</button>
  <button onclick="savePose()">Save Pose</button>
  <button onclick="runPose()">Run</button>

  <hr>

  <h3>Saved Poses</h3>
  <div id="poseTable">
    <?php include 'load_poses_table.php'; ?>
  </div>

</body>
</html>
