<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body>
<section id="input-form">
        <form method="get" action="">
            <div class="form">
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div class="form">
                <label>Role</label>
                <input type="text" name="role">
            </div>
            <div class="form">
                <label>Availability</label>
                <input type="text" name="availability">
            </div>
            <div class="form">
                <label>Age</label>
                <input type="number" name="age">
            </div>
            <div class="form">
                <label>Location</label>
                <input type="text" name="location">
            </div>
            <div class="form">
                <label>Years Experince</label>
                <input type="text" name="years">
            </div>
            <div class="form">
                <label>Email</label>
                <input type="email" name="email">
            </div class="form">
                <input type="submit" name="submit" value="SUBMIT" class="bg-blue">
            </div>
        </form>
    </section>

    <script src="assets/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.tutorialzine.com/misc/enhance/v2.js" async></script>
</body>
</html>