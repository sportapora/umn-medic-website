<h1>Absen</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/attendance" method="post" enctype="multipart/form-data">
    @csrf
    <label for="shift_time">Pilih shift:</label>
    <select id="shift_time" name="shift_time" onchange="checkShiftTime()" required>
        <option value="">Pilih shift</option>
        <option value="8:00">8:00-11:00</option>
        <option value="11:00">11:00-14:00</option>
        <option value="14:00">14:00-17:00</option>
        <option value="21:00">21:00-22:00</option>
    </select>
    <br/>

    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />

    <label for="photo">Bukti Foto</label>
    <input type="file" name="photo" required />
    <br/>

    <button type="submit" id="submit_button">Submit</button>
</form>

<script>
    function checkShiftTime() {
        const shiftTime = document.getElementById('shift_time').value;
        const submitButton = document.getElementById('submit_button');

        const currentTime = new Date();
        const currentHours = currentTime.getHours();
        const currentMinutes = currentTime.getMinutes();

        const [shiftHours, shiftMinutes] = shiftTime.split(':').map(Number);

        const thresholdTime = new Date();
        thresholdTime.setHours(shiftHours);
        thresholdTime.setMinutes(shiftMinutes - 15);

        if (currentTime >= thresholdTime) {
            submitButton.disabled = true;
            alert('You cannot submit attendance for this shift. Please choose another shift.');
        } else {
            submitButton.disabled = false;
        }
    }
</script>
