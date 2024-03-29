@extends('layout.main')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Presensi Pegawai</h2>
                    <div id="jam_digital" class="text-center mb-4"></div>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid mx-auto">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to display digital clock
    function displayTime() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();

        // Add leading zeros to minutes and seconds if less than 10
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // Choose between "AM" and "PM"
        var meridiem = (hours < 12) ? "AM" : "PM";

        // Convert hours to 12-hour format
        hours = (hours > 12) ? hours - 12 : hours;

        // Convert 0 to 12 for midnight and noon
        hours = (hours === 0) ? 12 : hours;

        // Create a string with the current time
        var currentTimeString = hours + ":" + minutes + ":" + seconds + " " + meridiem;

        // Update the "jam_digital" div with the current time
        document.getElementById("jam_digital").innerHTML = currentTimeString;

        // Update the time every 1 second
        setTimeout(displayTime, 1000);
    }

    // Call the displayTime function to start displaying the digital clock
    displayTime();
</script>
@endsection