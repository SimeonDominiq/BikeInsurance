const AppInterface = {
  displayGame: function() {
    this.displayStart();
  },
  displayStart: function() {
    var gameStart = '<div class="screen screen-start" id="start">'; // strat Game
    gameStart += "<header>";
    gameStart += "<h1>Game</h1>";
    gameStart +=
      '<a href="#" onclick="AppInterface.gameHandler()" class="button">Start Game</a>';
    gameStart += "</header>";
    gameStart += "</div>";
    this.populateDivWithHTML(gameStart);
  },
  populateDivWithHTML: function(div) {
    document.body.innerHTML = div;
  },
  gameHandler: function() {
    //let button = document.getElementsByClassName("button")[0];
    //console.log(this);
    AppInterface.displayBoard();
  }
};

var expire_select = document.querySelector("#expire_select");
expire_select.onchange = function() {
  let selected_value = this.options[this.selectedIndex].value;
  console.log(selected_value);
};
