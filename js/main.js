function setSimplyCountdown({ timer, elementId, callback }) {

    const element = document.querySelector(`#${elementId}`)
    if (element.innerHTML == '') {
        // set counter
        simplyCountdown(`#${elementId}`, {
            year: timer.date_end.year, // required
            month: timer.date_end.month, // required
            day: timer.date_end.day, // required
            hours: timer.date_end.hours, // Default is 0 [0-23] integer
            minutes: timer.date_end.minutes, // Default is 0 [0-59] integer
            seconds: timer.date_end.seconds, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'd', plural: 'd' },
                hours: { singular: 'h', plural: 'h' },
                minutes: { singular: 'm', plural: 'm' },
                seconds: { singular: 's', plural: 's' }
            },
            plural: true, //use plurals
            inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
            inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
            // in case of inline set to false
            enableUtc: false, //Use UTC or not - default : false
            onEnd: function () {
                callback(timer)
                return;
            }, //Callback on countdown end, put your own function here
            refresh: 1000, // default refresh every 1s
            sectionClass: 'simply-section', //section css class
            amountClass: 'simply-amount', // amount css class
            wordClass: 'simply-word', // word css class
            zeroPad: false,
            countUp: false
        });
    }
}

function setTimers({ date_start, date_end }) {
    // Asegurarnos que el elemento timer ya existe en el DOM
    const dateStart = new Date(date_start)
    const dateEnd = new Date(date_end)

    const timer = {
        date_start: {
            year: dateStart.getFullYear(),
            month: dateStart.getMonth() + 1,
            day: dateStart.getDate(),
            hours: dateStart.getHours(),
            minutes: dateStart.getMinutes(),
            seconds: dateStart.getSeconds()
        },
        date_end: {
            year: dateEnd.getFullYear(),
            month: dateEnd.getMonth() + 1,
            day: dateEnd.getDate(),
            hours: dateEnd.getHours(),
            minutes: dateEnd.getMinutes(),
            seconds: dateEnd.getSeconds()
        }
    }

    return timer
}

function init() {
    const timer = setTimers({
        date_start: '2022-04-27 00:00:00',
        date_end: '2023-04-27 00:00:00'
    })

    setSimplyCountdown({
        timer,
        elementId: 'counter__timer',
        callback: function () {
            console.log('On end')
        }
    })
}

init()