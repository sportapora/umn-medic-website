<h1>Absen</h1>
<form action="/attendance" method="post" enctype="multipart/form-data">
    @csrf
    <label for="shift_time">Pilih shift:</label>
    <select id="shift_time" name="shift_time" onchange="checkShiftTime()">
        <option value="8:00">8:00-10:00</option>
        <option value="10:00">10:00-12:00</option>
        <option value="12:00">12:00-14:00</option>
        <option value="14:00">14:00-16:00</option>
        <option value="16:00">16:00-18:00</option>
    </select>
    <br/>

    <label for="user_id">User ID</label>
    <input type="number" id="user_id" name="user_id" required/>
    <br/>

    <label for="photo">Bukti Foto</label>
    <input type="file" name="photo" required/>
    <br/>

    <button type="submit" id="submit_button" disabled>Submit</button>
</form>

<script>
    function checkShiftTime() {
        const shiftSelect = document.getElementById("shift_time");
        const submitButton = document.getElementById("submit_button");

        const shiftTime = shiftSelect.value;
        const [shiftHour, shiftMinute] = shiftTime.split(":").map(Number);

        const currentTime = new Date();
        const currentHour = currentTime.getHours();
        const currentMinute = currentTime.getMinutes();

        // Convert shift time and current time to minutes since midnight
        const shiftInMinutes = shiftHour * 60 + shiftMinute;
        const currentInMinutes = currentHour * 60 + currentMinute;

        // Check if current time is less than 15 minutes before the shift
        if (shiftInMinutes - currentInMinutes <= 15) {
            submitButton.disabled = true;
        } else {
            submitButton.disabled = false;
        }
    }

    // Call the function once on page load to set the initial state
    window.onload = checkShiftTime;
</script>
