/* 
* package : Ninja Calculator Module
* author : Theo van der Sluijs
* link : http://www.vandersluijs.nl, http://www.ninjoomla.com
* Description : Just a nifty calculator
* copyright : Copyright (C) 2007 VanderSluijs.nl, in cooperation with www.ninjoomla.com - Code so sharp, it hurts.
* email: theo@vandersluijs.nl
* date:  October 2007
* Release: 1.1
* PHP Code License : http://www.gnu.org/copyleft/gpl.html GNU/GPL 
* JavaScript Code & CSS  : http://creativecommons.org/licenses/by-nc-sa/3.0/
*/

//Calculator javascript
x = 0;
ops = "n";
token = 0;

//calculator function
function calc(op){ 
if(!isNaN(op) || op==".")
  { if(!token)
    { if(document.getElementById('calc_outcome').innerHTML == 0)
      { document.getElementById('calc_outcome').innerHTML = op; }
      else
      { document.getElementById('calc_outcome').innerHTML = document.getElementById('calc_outcome').innerHTML + op; }
    }
    else
    { document.getElementById('calc_outcome').innerHTML = op;
      token = 0;
    }
    return;
  }
  else
  { if(op=="C")
    { document.getElementById('calc_outcome').innerHTML = 0;
      token = 0;
      return;
    }
   
    if(op=="CE")
    { document.getElementById('calc_outcome').innerHTML = 0;
      return;
    }
    
    if(op=="%") 
    { document.getElementById('calc_outcome').innerHTML = document.getElementById('calc_outcome').innerHTML / 100.0;
      token = 1;
      return;
    }

    if(op=="+/-") 
    { document.getElementById('calc_outcome').innerHTML = -document.getElementById('calc_outcome').innerHTML;
      token = 1;
      return;
    }

    if(op=="+" || op=="*" || op=="/" || op=="-" || op=="=")
    { token = 1;
      if(ops!="n")
      { if(ops=="+")
        { x = x -(- document.getElementById('calc_outcome').innerHTML);
          document.getElementById('calc_outcome').innerHTML = x;
        }
        if(ops=="-")
        { x = x - document.getElementById('calc_outcome').innerHTML;
          document.getElementById('calc_outcome').innerHTML = x;
        }
        if(ops=="/")
        { x = x / document.getElementById('calc_outcome').innerHTML;
          document.getElementById('calc_outcome').innerHTML = x;
        }
        if(ops=="*")
        { x = x * document.getElementById('calc_outcome').innerHTML;
          document.getElementById('calc_outcome').innerHTML = x;
        }
      }
      else
      { x = document.getElementById('calc_outcome').innerHTML; }
  
      if(op!="=") { ops=op; }
      else { ops="n"; }
      return;
    }
  }
}