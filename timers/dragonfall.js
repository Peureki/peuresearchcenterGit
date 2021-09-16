// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let dragonfall = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        // BURNING FOREST
        {   // [1] Cull N
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-1-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-1-start'),
            resetButton: document.getElementById('timer-dragonfall-1-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-1-reset'),
            timeLabel: document.getElementById('timer-dragonfall-1'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-1'),
            sidebox: document.getElementById('dragonfall-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [2] Cull S
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-2-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-2-start'),
            resetButton: document.getElementById('timer-dragonfall-2-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-2-reset'),
            timeLabel: document.getElementById('timer-dragonfall-2'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-2'),
            sidebox: document.getElementById('dragonfall-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [3] Cull E
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-3-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-3-start'),
            resetButton: document.getElementById('timer-dragonfall-3-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-3-reset'),
            timeLabel: document.getElementById('timer-dragonfall-3'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-3'),
            sidebox: document.getElementById('dragonfall-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },

        {   // [4] Champ Abyssal
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-dragonfall-4-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-4-start'),
            resetButton: document.getElementById('timer-dragonfall-4-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-4-reset'),
            timeLabel: document.getElementById('timer-dragonfall-4'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-4'),
            sidebox: document.getElementById('dragonfall-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },

        {   // [5] Brandstorm
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-dragonfall-5-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-5-start'),
            resetButton: document.getElementById('timer-dragonfall-5-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-5-reset'),
            timeLabel: document.getElementById('timer-dragonfall-5'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-5'),
            sidebox: document.getElementById('dragonfall-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [6] Mender
            status: 0,
            key: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-dragonfall-6-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-6-start'),
            resetButton: document.getElementById('timer-dragonfall-6-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-6-reset'),
            timeLabel: document.getElementById('timer-dragonfall-6'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-6'),
            sidebox: document.getElementById('dragonfall-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [7] Bridge N
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-7-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-7-start'),
            resetButton: document.getElementById('timer-dragonfall-7-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-7-reset'),
            timeLabel: document.getElementById('timer-dragonfall-7'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-7'),
            sidebox: document.getElementById('dragonfall-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [8] Bridge W 
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-8-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-8-start'),
            resetButton: document.getElementById('timer-dragonfall-8-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-8-reset'),
            timeLabel: document.getElementById('timer-dragonfall-8'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-8'),
            sidebox: document.getElementById('dragonfall-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        // OKLAHOMA
        {   // [9] Cull W
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-9-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-9-start'),
            resetButton: document.getElementById('timer-dragonfall-9-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-9-reset'),
            timeLabel: document.getElementById('timer-dragonfall-9'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-9'),
            sidebox: document.getElementById('dragonfall-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [10] Cull S 
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-10-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-10-start'),
            resetButton: document.getElementById('timer-dragonfall-10-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-10-reset'),
            timeLabel: document.getElementById('timer-dragonfall-10'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-10'),
            sidebox: document.getElementById('dragonfall-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [11] Cull E 
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-11-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-11-start'),
            resetButton: document.getElementById('timer-dragonfall-11-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-11-reset'),
            timeLabel: document.getElementById('timer-dragonfall-11'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-11'),
            sidebox: document.getElementById('dragonfall-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-11'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [12] Champ Arbiter 
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-dragonfall-12-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-12-start'),
            resetButton: document.getElementById('timer-dragonfall-12-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-12-reset'),
            timeLabel: document.getElementById('timer-dragonfall-12'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-12'),
            sidebox: document.getElementById('dragonfall-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-12'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [13] Brandstorm 
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-dragonfall-13-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-13-start'),
            resetButton: document.getElementById('timer-dragonfall-13-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-13-reset'),
            timeLabel: document.getElementById('timer-dragonfall-13'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-13'),
            sidebox: document.getElementById('dragonfall-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-13'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [14] Mender 
            status: 0,
            key: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-dragonfall-14-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-14-start'),
            resetButton: document.getElementById('timer-dragonfall-14-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-14-reset'),
            timeLabel: document.getElementById('timer-dragonfall-14'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-14'),
            sidebox: document.getElementById('dragonfall-14-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-14'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [15] Bridge S
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-15-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-15-start'),
            resetButton: document.getElementById('timer-dragonfall-15-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-15-reset'),
            timeLabel: document.getElementById('timer-dragonfall-15'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-15'),
            sidebox: document.getElementById('dragonfall-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-15'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        // MELANDRU
        {   // [16] Cull N
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-16-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-16-start'),
            resetButton: document.getElementById('timer-dragonfall-16-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-16-reset'),
            timeLabel: document.getElementById('timer-dragonfall-16'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-16'),
            sidebox: document.getElementById('dragonfall-16-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-16'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [17] Cull W
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-17-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-17-start'),
            resetButton: document.getElementById('timer-dragonfall-17-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-17-reset'),
            timeLabel: document.getElementById('timer-dragonfall-17'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-17'),
            sidebox: document.getElementById('dragonfall-17-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-17'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [18] Cull S 
            status: 0,
            key: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-18-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-18-start'),
            resetButton: document.getElementById('timer-dragonfall-18-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-18-reset'),
            timeLabel: document.getElementById('timer-dragonfall-18'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-18'),
            sidebox: document.getElementById('dragonfall-18-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-18'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [19] Champ Elemental
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-dragonfall-19-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-19-start'),
            resetButton: document.getElementById('timer-dragonfall-19-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-19-reset'),
            timeLabel: document.getElementById('timer-dragonfall-19'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-19'),
            sidebox: document.getElementById('dragonfall-19-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-19'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [20] Brandstorm
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-dragonfall-20-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-20-start'),
            resetButton: document.getElementById('timer-dragonfall-20-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-20-reset'),
            timeLabel: document.getElementById('timer-dragonfall-20'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-20'),
            sidebox: document.getElementById('dragonfall-20-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-20'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [21] Mender
            status: 0,
            key: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-dragonfall-21-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-21-start'),
            resetButton: document.getElementById('timer-dragonfall-21-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-21-reset'),
            timeLabel: document.getElementById('timer-dragonfall-21'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-21'),
            sidebox: document.getElementById('dragonfall-21-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-21'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [22] Bridge E
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-22-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-22-start'),
            resetButton: document.getElementById('timer-dragonfall-22-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-22-reset'),
            timeLabel: document.getElementById('timer-dragonfall-22'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-22'),
            sidebox: document.getElementById('dragonfall-22-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-22'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(dragonfall.events); 
