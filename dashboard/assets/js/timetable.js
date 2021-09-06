// {"key" : {obj: arr["moday"]}}
var classObject = {
  "12TH": {
    PHYSICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    CHEMISTRY: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    BIOLOGY: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    ACCOUNTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    BUISNESS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "11TH": {
    PHYSICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    CHEMISTRY: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    BIOLOGY: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    ACCOUNTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    BUISNESS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "10TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "9TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "8TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "7TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "6TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "5TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "4TH": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "3rd": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "2nd": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  "1st": {
    SCIENCE: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    MATHEMATICS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
};
window.onload = function () {
  var classSel = document.getElementById("class");
  var subjectSel = document.getElementById("subject");
  var daySel = document.getElementById("day");
  var timingsSel = document.getElementById("timings");
  var teacherSel = document.getElementById("teacher");
  for (var x in classObject) {
    classSel.options[classSel.options.length] = new Option(x, x);
  }
  classSel.onchange = function () {
    //empty Chapters- and subject- dropdowns
    subjectSel.length = 1;
    daySel.length = 1;
    //display correct values
    for (var y in classObject[this.value]) {
      subjectSel.options[subjectSel.options.length] = new Option(y, y);
    }
  };
  subjectSel.onchange = function () {
    //empty Chapters dropdown
    daySel.length = 1;
    //display correct values
    var z = classObject[classSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      daySel.options[daySel.options.length] = new Option(z[i], z[i]);
    }
  };
};
