<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrated Citizens Social Security (ICSS)</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body class="bg-light">

<div class="container py-4">
  <h2 class="text-center mb-4">Integrated Citizens Social Security (ICSS)</h2>

  <!-- Search by NIN -->
  <form method="GET" class="mb-4">
    <div class="input-group">
      <input type="text" name="nin" class="form-control" placeholder="Enter National ID Number (NIN)" required>
      <button class="btn btn-primary">Search</button>
    </div>
  </form>

  <!-- Tabs -->
  <ul class="nav nav-tabs" id="icssTab" role="tablist">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#health" role="tab">Health Record</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#welfare" role="tab">Social Welfare</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#land" role="tab">Land Ownership</a></li>
  </ul>

  <div class="tab-content p-4 border bg-white">
    <!-- Health Tab -->
    <div class="tab-pane fade show active" id="health" role="tabpanel">
      <h5>Health Record</h5>
      <form method="POST" action="">
        <div class="mb-3"><input name="blood_type" class="form-control" placeholder="Blood Type"></div>
        <div class="mb-3"><input name="chronic_conditions" class="form-control" placeholder="Chronic Conditions"></div>
        <div class="mb-3"><input name="allergies" class="form-control" placeholder="Allergies"></div>
        <div class="mb-3"><input name="last_checkup" class="form-control" placeholder="Last Checkup Date (YYYY-MM-DD)"></div>
        <button class="btn btn-success">Save Health Record</button>
      </form>
    </div>

    <!-- Welfare Tab -->
    <div class="tab-pane fade" id="welfare" role="tabpanel">
      <h5>Social Welfare</h5>
      <form method="POST" action="">
        <div class="mb-3"><input name="status" class="form-control" placeholder="Welfare Status (Active/Inactive)"></div>
        <div class="mb-3"><input name="program" class="form-control" placeholder="Program Name"></div>
        <div class="mb-3"><input name="date_enrolled" class="form-control" placeholder="Date Enrolled (YYYY-MM-DD)"></div>
        <button class="btn btn-success">Save Welfare Info</button>
      </form>
    </div>

    <!-- Land Tab -->
    <div class="tab-pane fade" id="land" role="tabpanel">
      <h5>Land Ownership</h5>
      <form method="POST" action="">
        <div class="mb-3"><input name="plot_number" class="form-control" placeholder="Plot Number"></div>
        <div class="mb-3"><input name="location" class="form-control" placeholder="Location"></div>
        <div class="mb-3"><input name="size_acres" class="form-control" placeholder="Size in Acres"></div>
        <div class="mb-3"><input name="registered_date" class="form-control" placeholder="Registration Date (YYYY-MM-DD)"></div>
        <button class="btn btn-success">Save Land Info</button>
      </form>
    </div>
  </div>

  <footer class="text-center mt-5 text-muted small">
    © <?php echo date('Y'); ?> ICSS Project - Amanya Peter
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
