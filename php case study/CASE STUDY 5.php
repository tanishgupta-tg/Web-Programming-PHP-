<?php
$file = "students.json";
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
// ADD / UPDATE
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $course = $_POST['course'];
    $type = $_POST['type'];
    $marks = trim($_POST['marks']);
    $valid = false;
    // Validation based on type
    if ($type == "CGPA" && $marks >= 0 && $marks <= 10) $valid = true;
    if ($type == "Percentage" && $marks >= 0 && $marks <= 100) $valid = true;
    if ($type == "Total" && $marks >= 0 && $marks <= 500) $valid = true;
    if ($name != "" && $valid) {
        $record = [
            "name" => $name,
            "course" => $course,
            "type" => $type,
            "marks" => $marks
        ];
        if ($id == "") {
            $data[] = $record;
        } else {
            $data[$id] = $record;
        }
        file_put_contents($file, json_encode($data));
    }
    header("Location: ".$_SERVER['PHP_SELF']);
}
// DELETE
if (isset($_GET['delete'])) {
    unset($data[$_GET['delete']]);
    $data = array_values($data);
    file_put_contents($file, json_encode($data));
    header("Location: ".$_SERVER['PHP_SELF']);
}
// EDIT
$editData = ["name"=>"", "course"=>"", "type"=>"CGPA", "marks"=>""];
$editId = "";
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];
    $editData = $data[$editId];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Record System</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; text-align:center; }
        .box { background:white; padding:20px; width:60%; margin:auto; border-radius:10px; }
        input, select { padding:8px; margin:5px; width:80%; }
        button { padding:8px 15px; background:green; color:white; border:none; }
        table { width:100%; margin-top:20px; border-collapse:collapse; }
        th, td { padding:10px; border:1px solid #ddd; }
        a { text-decoration:none; padding:5px 10px; }
        .edit { background:orange; color:white; }
        .delete { background:red; color:white; }
    </style>
    <script>
        function validateMarks() {
            let type = document.getElementById("type").value;
            let marks = document.getElementById("marks").value;
            if (type == "CGPA" && (marks < 0 || marks > 10)) {
                alert("CGPA must be between 0 and 10");
                return false;
            }
            if (type == "Percentage" && (marks < 0 || marks > 100)) {
                alert("Percentage must be between 0 and 100");
                return false;
            }
            if (type == "Total" && (marks < 0 || marks > 500)) {
                alert("Total marks must be between 0 and 500");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<div class="box">
    <h2>Student Record Management System</h2>
    <form method="post" onsubmit="return validateMarks()">
        <input type="hidden" name="id" value="<?php echo $editId; ?>">
        <input type="text" name="name" placeholder="Student Name"
        value="<?php echo $editData['name']; ?>" required><br>
        <!-- COURSE DROPDOWN -->
        <select name="course" required>
            <?php
            $courses = ["BCA","BBA","MBA","BBALLB","MCA","LLB"];
            foreach ($courses as $c) {
                $selected = ($editData['course'] == $c) ? "selected" : "";
                echo "<option $selected>$c</option>";
            }
            ?>
        </select><br>
        <!-- MARK TYPE -->
        <select name="type" id="type">
            <option <?php if($editData['type']=="CGPA") echo "selected"; ?>>CGPA</option>
            <option <?php if($editData['type']=="Percentage") echo "selected"; ?>>Percentage</option>
            <option <?php if($editData['type']=="Total") echo "selected"; ?>>Total</option>
        </select><br>
        <input type="number" step="0.01" id="marks" name="marks"
        placeholder="Enter Marks"
        value="<?php echo $editData['marks']; ?>" required><br>
        <button type="submit" name="save">Save</button>
    </form>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Course</th>
            <th>Marks</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data as $index => $row): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td>
                <?php 
                echo $row['marks'] . " (" . $row['type'] . ")";
                ?>
            </td>
            <td>
                <a class="edit" href="?edit=<?php echo $index; ?>">Edit</a>
                <a class="delete" href="?delete=<?php echo $index; ?>" onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>