(function() {
  var questions = [{
    question: " A ______________ is a web site like any other, but it is intended to offer personal opinionsof people on their hobbies, interests, commentaries, photo, etc.",
    choices: ["Protocol","Blog","Webpage","Journals"],
    correctAnswer: 1
  }, {
    question: " An e-mail address consists of four parts:",
    choices: ["The username","The symbol","The hostname","The top level domain"],
    correctAnswer: 3
  }, {
    question: "GIMP is image an _________ editing tool.",
    choices: [" Open source","Proprietary","Shareware","Both (a) & (b)"],
    correctAnswer: 0
  }, {
    question: "What is the correct html command for inserting an image?",
    choices: ["<image src='image.gif'>","<img> image.gif</img>","<img src='image.gif'","Both (a) & (b)"],
    correctAnswer: 0
  }, {
    question: "To wrap the text to the next line, the tag used for",
    choices: [" <BR>","<P>","<I>","<LI>"],
    correctAnswer: 0
  }, {
    question: " Which of the following is an anti-virus program",
    choices: ["  Norton","Quick heal","K7","All of these"],
    correctAnswer: 3
  }, {
    question: "Viruses are __________",
    choices: ["man made","Naturally occur","machine made","Both (a) & (b)"],
    correctAnswer: 0
  }, {
    question: "Unsolicited commercial email is known as ____________",
    choices: ["Spam","Virus","Malware","Spyware"],
    correctAnswer: 0
  }, {
    question: "In web services, the communication takes place between-",
    choices: ["Two electronic devices"," Two human beings"," Two spider","None of the above"],
    correctAnswer: 0
  }, {
    question: " The benefit of E-leaning is",
    choices: ["Class work can be scheduled around work and family"," Reduces travel time and travel costs for off-campus students","Students can study anywhere they have access to a computer and Internet connection","All of the above"],
    correctAnswer: 3
  }];


  var questionCounter = 0; //Tracks question number
  var selections = []; //Array containing user choices
  var quiz = $('#quiz'); //Quiz div object

  // Display initial question
  displayNext();

  // Click handler for the 'next' button
  $('#next').on('click', function (e) {
    e.preventDefault();

    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {
      return false;
    }
    choose();

    // If no user selection, progress is stopped
    if (isNaN(selections[questionCounter])) {
      alert('Please make a selection!');
    } else {
      questionCounter++;
      displayNext();
    }
  });

  // Click handler for the 'prev' button
  $('#prev').on('click', function (e) {
    e.preventDefault();

    if(quiz.is(':animated')) {
      return false;
    }
    choose();
    questionCounter--;
    displayNext();
  });

  // Click handler for the 'Start Over' button
  $('#start').on('click', function (e) {
    e.preventDefault();

    if(quiz.is(':animated')) {
      return false;
    }
    questionCounter = 0;
    selections = [];
    displayNext();
    $('#start').hide();
  });

  // Animates buttons on hover
  $('.button').on('mouseenter', function () {
    $(this).addClass('active');
  });
  $('.button').on('mouseleave', function () {
    $(this).removeClass('active');
  });

  // Creates and returns the div that contains the questions and
  // the answer selections
  function createQuestionElement(index) {
    var qElement = $('<div>', {
      id: 'question'
    });

    var header = $('<h2>Question ' + (index + 1) + ':</h2>');
    qElement.append(header);

    var question = $('<p>').append(questions[index].question);
    qElement.append(question);

    var radioButtons = createRadios(index);
    qElement.append(radioButtons);

    return qElement;
  }

  // Creates a list of the answer choices as radio inputs
  function createRadios(index) {
    var radioList = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += questions[index].choices[i];
      item.append(input);
      radioList.append(item);
    }
    return radioList;
  }

  // Reads the user selection and pushes the value to an array
  function choose() {
    selections[questionCounter] = +$('input[name="answer"]:checked').val();
  }

  // Displays next requested element
  function displayNext() {
    quiz.fadeOut(function() {
      $('#question').remove();

      if(questionCounter < questions.length){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
        if (!(isNaN(selections[questionCounter]))) {
          $('input[value='+selections[questionCounter]+']').prop('checked', true);
        }

        // Controls display of 'prev' button
        if(questionCounter === 1){
          $('#prev').show();
        } else if(questionCounter === 0){

          $('#prev').hide();
          $('#next').show();
        }
      }else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
      }
    });
  }

  // Computes score and returns a paragraph element to be displayed
  function displayScore() {
    var score = $('<p>',{id: 'question'});

    var numCorrect = 0;
    for (var i = 0; i < selections.length; i++) {
      if (selections[i] === questions[i].correctAnswer) {
        numCorrect++;
      }
    }

    score.append('You got ' + numCorrect + ' questions out of ' +
                 questions.length + ' right!!!');
    return score;
  }
})();
