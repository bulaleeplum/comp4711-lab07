<div class="row center">
    {daytest}
    {timetest}
    <div>
        <h4>bingo?</h4>
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

</div>