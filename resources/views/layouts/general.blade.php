<<<<<<< HEAD
@guest
=======
    @guest
>>>>>>> 0f896e1d786859d6bca49b4d752ce5deabd61985
        @yield("contenu")
    @endguest
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset='UTF-8'>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="/css/style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <title>Moodify</title>
            <link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>

            @auth
            
            <div class="flex">
               <div class="logo-home"></div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">
                        <div class="logout"></div>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>






                    @yield('contenu')




            <div class="menu">
                <div class="home"></div>
                <div class="settings"></div>
            </div>
            @endauth

            <script src="/js/jquery.js"></script>
            <script src="/js/jquery.pjax.js"></script>
            <script src="/js/divers.js"></script>
            <script src="/js/moment.js"></script>
            <script>
<<<<<<< HEAD
            
let calendarSettings = {
  date: moment().set('date', 1),
  today: moment()
}

const incrementMonth = () => {
  calendarSettings.date.add(1, 'Months')
  console.log(`incremented to ${calendarSettings.date}`)
  displayCalendar(calendarSettings)
}

const decrementMonth = () => {
  calendarSettings.date.subtract(1, 'Months')
  console.log(`decremented to ${calendarSettings.date}`)
  displayCalendar(calendarSettings)
}

const displayCalendar = (calendarSettings) => {

  const calendar = document.querySelector('.calendar-grid')
  
  const calendarTitle = calendarSettings.date.format('MMMM YYYY')
  const daysInMonth = calendarSettings.date.endOf('Month').date()
  const firstDay = calendarSettings.date.startOf('Month').isoWeekday()

  calendar.innerHTML = '';
  calendar.innerHTML = `
                        <div class="calendar-nav"><a class="left" onClick="decrementMonth()"></a></div>
                        <div class="calendar-title">${calendarTitle}</div>
                        <div class="calendar-nav calendar-nav__right"><a onClick="incrementMonth()"> </a></div>
                        <div class="calendar-dayname">L</div>
                        <div class="calendar-dayname">M</div>
                        <div class="calendar-dayname">M</div>
                        <div class="calendar-dayname">J</div>
                        <div class="calendar-dayname">V</div>
                        <div class="calendar-dayname">S</div>
                        <div class="calendar-dayname">D</div>
                        `;
  
  for (let day = 1; day <= daysInMonth; day++) {
    let calendarDay = document.createElement('div')
    if (day === 1) {
      calendarDay.setAttribute('style', `grid-column-start:${firstDay}`)
      console.log(`firstDay = ${firstDay}`)
    }
    calendarDay.classList.add('calendar-day')
    
    if (calendarSettings.today.month() == calendarSettings.date.month() && calendarSettings.today.year() == calendarSettings.date.year()) {
      if (calendarSettings.today.date() == day) {
        calendarDay.classList.add('current-day')
        calendarDay.setAttribute('onclick',"mood()")
      }
    }
    calendarDay.innerHTML = day
    calendar.appendChild(calendarDay)
  }


}

displayCalendar(calendarSettings);
                
  
</script>
        </body>
    </html>

=======

        let calendarSettings = {
          date: moment().set('date', 1),
          today: moment()
        }

        const incrementMonth = () => {
          calendarSettings.date.add(1, 'Months')
          console.log(`incremented to ${calendarSettings.date}`)
          displayCalendar(calendarSettings)
        }

        const decrementMonth = () => {
          calendarSettings.date.subtract(1, 'Months')
          console.log(`decremented to ${calendarSettings.date}`)
          displayCalendar(calendarSettings)
        }

        const displayCalendar = (calendarSettings) => {

          const calendar = document.querySelector('.calendar-grid')

          const calendarTitle = calendarSettings.date.format('MMMM YYYY')
          const daysInMonth = calendarSettings.date.endOf('Month').date()
          const firstDay = calendarSettings.date.startOf('Month').isoWeekday()

          calendar.innerHTML = `
                                <div class="calendar-nav"><a class="left" onClick="decrementMonth()"></a></div>
                                <div class="calendar-title">${calendarTitle}</div>
                                <div class="calendar-nav calendar-nav__right"><a onClick="incrementMonth()"> </a></div>
                                <div class="calendar-dayname">L</div>
                                <div class="calendar-dayname">M</div>
                                <div class="calendar-dayname">M</div>
                                <div class="calendar-dayname">J</div>
                                <div class="calendar-dayname">V</div>
                                <div class="calendar-dayname">S</div>
                                <div class="calendar-dayname">D</div>
                                `

          for (let day = 1; day <= daysInMonth; day++) {
            let calendarDay = document.createElement('div')
            if (day === 1) {
              calendarDay.setAttribute('style', `grid-column-start:${firstDay}`)
              console.log(`firstDay = ${firstDay}`)
            }
            calendarDay.classList.add('calendar-day')
            if (calendarSettings.today.month() == calendarSettings.date.month() && calendarSettings.today.year() == calendarSettings.date.year()) {
              if (calendarSettings.today.date() == day) {
                calendarDay.classList.add('current-day')
              }
            }
            calendarDay.innerHTML = day
            calendar.appendChild(calendarDay)
          }


        }

        displayCalendar(calendarSettings);
        </script>
        </body>
    </html>
>>>>>>> 0f896e1d786859d6bca49b4d752ce5deabd61985

