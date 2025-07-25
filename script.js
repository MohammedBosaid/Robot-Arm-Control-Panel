// تحديث الرقم بجانب السلايدر
function updateLabel(slider) {
  const id = slider.id.replace("motor", "label");
  document.getElementById(id).textContent = slider.value;
}

// إعادة القيم كلها إلى 90
function resetSliders() {
  for (let i = 1; i <= 6; i++) {
    const slider = document.getElementById(`motor${i}`);
    slider.value = 90;
    updateLabel(slider);
  }
}

// حفظ الوضع الحالي
function savePose() {
  const values = [];
  for (let i = 1; i <= 6; i++) {
    values.push(document.getElementById(`motor${i}`).value);
  }

  fetch("save_pose.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `motor1=${values[0]}&motor2=${values[1]}&motor3=${values[2]}&motor4=${values[3]}&motor5=${values[4]}&motor6=${values[5]}`
  })
  .then(response => response.text())
  .then(data => {
    // إعادة تحميل جدول الأوضاع
    refreshPoseTable();
  });
}

// تنفيذ الوضع المحفوظ (الأخير المفعّل)
function runPose() {
  fetch("update_status.php")
    .then(() => refreshPoseTable());
}

// تحميل الوضع
function loadPose(id) {
  fetch(`load_pose.php?id=${id}`)
    .then(() => refreshPoseTable());
}

// حذف الوضع
function removePose(id) {
  fetch(`remove_pose.php?id=${id}`)
    .then(() => refreshPoseTable());
}

// تحديث جدول الأوضاع بدون إعادة تحميل الصفحة
function refreshPoseTable() {
  fetch("load_poses_table.php")
    .then(response => response.text())
    .then(html => {
      document.getElementById("poseTable").innerHTML = html;
    });
}
