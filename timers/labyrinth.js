// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let lab = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [1] NE Foes Door
            status: 0,
            key: 0,
            cooldown: 60 * 19 + 30, 
            startButton: document.getElementById('timer-lab-1-start'),
            startSideButton: document.getElementById('sidetimer-lab-1-start'),
            resetButton: document.getElementById('timer-lab-1-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-1-reset'),
            timeLabel: document.getElementById('timer-lab-1'), 
            timeSideLabel: document.getElementById('sidetimer-lab-1'),
            sidebox: document.getElementById('lab-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [2] Harrow
            status: 0,
            key: 0,
            cooldown: 60 * 25, 
            startButton: document.getElementById('timer-lab-2-start'),
            startSideButton: document.getElementById('sidetimer-lab-2-start'),
            resetButton: document.getElementById('timer-lab-2-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-2-reset'),
            timeLabel: document.getElementById('timer-lab-2'), 
            timeSideLabel: document.getElementById('sidetimer-lab-2'),
            sidebox: document.getElementById('lab-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [3] N Vets Door
            status: 0,
            key: 0,
            cooldown: 60 * 20, 
            startButton: document.getElementById('timer-lab-3-start'),
            startSideButton: document.getElementById('sidetimer-lab-3-start'),
            resetButton: document.getElementById('timer-lab-3-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-3-reset'),
            timeLabel: document.getElementById('timer-lab-3'), 
            timeSideLabel: document.getElementById('sidetimer-lab-3'),
            sidebox: document.getElementById('lab-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [4] Viscount
            status: 0,
            key: 0,
            cooldown: 60 * 25, 
            startButton: document.getElementById('timer-lab-4-start'),
            startSideButton: document.getElementById('sidetimer-lab-4-start'),
            resetButton: document.getElementById('timer-lab-4-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-4-reset'),
            timeLabel: document.getElementById('timer-lab-4'), 
            timeSideLabel: document.getElementById('sidetimer-lab-4'),
            sidebox: document.getElementById('lab-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [5] NW Vets Door
            status: 0,
            key: 0,
            cooldown: 60 * 18, 
            startButton: document.getElementById('timer-lab-5-start'),
            startSideButton: document.getElementById('sidetimer-lab-5-start'),
            resetButton: document.getElementById('timer-lab-5-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-5-reset'),
            timeLabel: document.getElementById('timer-lab-5'), 
            timeSideLabel: document.getElementById('sidetimer-lab-5'),
            sidebox: document.getElementById('lab-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [6] Mid Vets Door
            status: 0,
            key: 0,
            cooldown: 60 * 21 + 45, 
            startButton: document.getElementById('timer-lab-6-start'),
            startSideButton: document.getElementById('sidetimer-lab-6-start'),
            resetButton: document.getElementById('timer-lab-6-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-6-reset'),
            timeLabel: document.getElementById('timer-lab-6'), 
            timeSideLabel: document.getElementById('sidetimer-lab-6'),
            sidebox: document.getElementById('lab-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [7] Steve
            status: 0,
            key: 0,
            cooldown: 60 * 20, 
            startButton: document.getElementById('timer-lab-7-start'),
            startSideButton: document.getElementById('sidetimer-lab-7-start'),
            resetButton: document.getElementById('timer-lab-7-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-7-reset'),
            timeLabel: document.getElementById('timer-lab-7'), 
            timeSideLabel: document.getElementById('sidetimer-lab-7'),
            sidebox: document.getElementById('lab-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [8] SW Foes Door
            status: 0,
            key: 0,
            cooldown: 60 * 21 + 15, 
            startButton: document.getElementById('timer-lab-8-start'),
            startSideButton: document.getElementById('sidetimer-lab-8-start'),
            resetButton: document.getElementById('timer-lab-8-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-8-reset'),
            timeLabel: document.getElementById('timer-lab-8'), 
            timeSideLabel: document.getElementById('sidetimer-lab-8'),
            sidebox: document.getElementById('lab-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [9] Gourdy
            status: 0,
            key: 0,
            cooldown: 60 * 26, 
            startButton: document.getElementById('timer-lab-9-start'),
            startSideButton: document.getElementById('sidetimer-lab-9-start'),
            resetButton: document.getElementById('timer-lab-9-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-9-reset'),
            timeLabel: document.getElementById('timer-lab-9'), 
            timeSideLabel: document.getElementById('sidetimer-lab-9'),
            sidebox: document.getElementById('lab-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [10] S Vets Door
            status: 0,
            key: 0,
            cooldown: 60 * 26 + 15, 
            startButton: document.getElementById('timer-lab-10-start'),
            startSideButton: document.getElementById('sidetimer-lab-10-start'),
            resetButton: document.getElementById('timer-lab-10-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-10-reset'),
            timeLabel: document.getElementById('timer-lab-10'), 
            timeSideLabel: document.getElementById('sidetimer-lab-10'),
            sidebox: document.getElementById('lab-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [11] SE Foes Door
            status: 0,
            key: 0,
            cooldown: 60 * 20, 
            startButton: document.getElementById('timer-lab-11-start'),
            startSideButton: document.getElementById('sidetimer-lab-11-start'),
            resetButton: document.getElementById('timer-lab-11-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-11-reset'),
            timeLabel: document.getElementById('timer-lab-11'), 
            timeSideLabel: document.getElementById('sidetimer-lab-11'),
            sidebox: document.getElementById('lab-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-11'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [12] Lich
            status: 0,
            key: 0,
            cooldown: 60 * 26 + 45, 
            startButton: document.getElementById('timer-lab-12-start'),
            startSideButton: document.getElementById('sidetimer-lab-12-start'),
            resetButton: document.getElementById('timer-lab-12-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-12-reset'),
            timeLabel: document.getElementById('timer-lab-12'), 
            timeSideLabel: document.getElementById('sidetimer-lab-12'),
            sidebox: document.getElementById('lab-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-12'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [13] E Foes Door
            status: 0,
            key: 0,
            cooldown: 60 * 20 + 30, 
            startButton: document.getElementById('timer-lab-13-start'),
            startSideButton: document.getElementById('sidetimer-lab-13-start'),
            resetButton: document.getElementById('timer-lab-13-reset'),
            resetSideButton: document.getElementById('sidetimer-lab-13-reset'),
            timeLabel: document.getElementById('timer-lab-13'), 
            timeSideLabel: document.getElementById('sidetimer-lab-13'),
            sidebox: document.getElementById('lab-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-lab-13'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(lab.events); 