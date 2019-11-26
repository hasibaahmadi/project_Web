<!DOCTYPE html>
<html>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 40px;
        }
    </style>
<body>

<h3>Add project data.</h3>

<div>
  <form action="<?=base_url()?>projects/newProject" method="post">
    <label for="fname">Project Name</label>
    <input type="text" id="fname" name="name" placeholder="Project name">

    <label for="lname">Project location</label>
    <input type="text" id="lname" name="location" placeholder="Project location">

    <label for="stratDate">Start Date</label>
    <input type="date" id="stratDate" name="startDate" placeholder="Start Date">

    <label for="endDate">End Date</label>
    <input type="date" id="endDate" name="endDate" placeholder="End Date">
    <br>
    <label for="duration">Duration</label>
    <input type="text" id="duration" name="duration" placeholder="Duration">


    <label for="donor">Donor</label>
    <input type="text" id="donor" name="donor" placeholder="Donor">

    <label for="country">State</label>
    <select id="country" name="state">
      <option value="Complated">Complated</option>
      <option value="Ongoing">Ongoing</option>
    </select>
  
  <textarea name="event" placeholder="Enter the project event." rows="10" cols="40"></textarea>
  <textarea name="cause" placeholder="Enter the project cause." rows="10" cols="40"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>

</html>
