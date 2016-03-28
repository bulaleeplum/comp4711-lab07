<div class="row center">

    <div>
        <h4>Timetable by Day</h4>
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Type</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                {days}
                <tr>
                    <td>{time}</td>
                    <td>{day}</td>
                    <td>{name}</td>
                    <td>{type}</td>
                    <td>{room}</td>
                    <td>{instructor}</td>
                </tr>
                {/days}
            </tbody>
        </table>
    </div>

    <div>
        <h4>Timetable by Course</h4>
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Type</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                {courses}
                <tr>
                    <td>{time}</td>
                    <td>{day}</td>
                    <td>{name}</td>
                    <td>{type}</td>
                    <td>{room}</td>
                    <td>{instructor}</td>
                </tr>
                {/courses}
            </tbody>
        </table>
    </div>

    <div>
        <h4>Timetable by Timeslot</h4>
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Type</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                {timeslots}
                <tr>
                    <td>{time}</td>
                    <td>{day}</td>
                    <td>{name}</td>
                    <td>{type}</td>
                    <td>{room}</td>
                    <td>{instructor}</td>
                </tr>
                {/timeslots}
            </tbody>
        </table>
    </div>

</div>