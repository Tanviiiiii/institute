// {"key" : {obj: arr["moday"]}}
var classObject = {
  12: {
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
    Economics: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    ENGLISH: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  11: {
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
    Economics: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
    ENGLISH: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  10: {
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
    ENGLISH: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  9: {
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
    ENGLISH: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  8: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  7: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  6: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  5: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  4: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  3: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  2: {
    ALL_SUBJECTS: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thrusday",
      "Friday",
      "Saturday",
    ],
  },
  1: {
    ALL_SUBJECTS: [
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
  var classSel = document.getElementById("update-class");
  var subjectSel = document.getElementById("update-subject");
  var daySel = document.getElementById("update-day");

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
