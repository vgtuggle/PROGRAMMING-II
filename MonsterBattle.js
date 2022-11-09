class HauntedDoll {
    constructor() {
      this.health = 100;
      this.sound = "Hi, I'm Chucky, wanna play?!";
      this.damage = 10;
      console.log ("We're freinds to the end, remember?");
      console.log (this.sound);
    }
  }

  class Ghost {
    constructor() {
        this.health = 10;
        this.damage = 2;
        this.sound = "boo..."
        console.log("Some Random person died");
        console.log (this.sound);
    }
}

    class Dracula {
        constructor(){
            this.health = 100;
            this.sound = "Whoooo";
            this.damage = 8; 
            console.log("I vill drain your blood!")
            console.log (this.sound);
        }
    }

class Dice {
    constructor() {

    }

    rollDice() {
        
        this.face = Math.floor(Math.random() * 6) + 1; // randomly get number 1-6
        console.log ("rolling dice: " + "a " + this.face + "!");
        return this.face;
    }
}

let casper = new Ghost();
let chucky = new HauntedDoll();
let dracula = new Dracula();
let cDice = new Dice();
let chDice = new Dice();
let dDice = new Dice();

    
function fightMonsters(m1, m2, m3) {
    
    let monster1 = m1;
    monster1.name = "Chucky";
    let monster2 = m2;
    monster2.name = "Casper";
    let monster3 = m3;
    monster3.name = "Dracula";

    let m1Roll = cDice.rollDice();
    let m2Roll = chDice.rollDice();
    let m3Roll = dDice.rollDice();

    if (m1Roll === m2Roll ) {
        console.log("it's a tie, roll again.")
    } else if (m1Roll > m2Roll) {
        console.log(monster1.name + " wins!"); 
    } else {
        console.log(monster2.name + " wins!")
    }


}

fightMonsters(casper, chucky, dracula);
