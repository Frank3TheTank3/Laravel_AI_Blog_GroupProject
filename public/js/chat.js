
//Get Input & on keydown enter send input
const inputField = document.getElementById("input");
inputField.addEventListener("keydown", (e) => {
  if (e.code === "Enter") {
    let input = inputField.value;
    inputField.value = "";
    output(input);
  }
});

//Use input as output source
function output(input) { 
  let product;
  let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "");
  text = text
    .replace(/ ein /g, " ")
    .replace(/ eine /g, " ")
    .replace(/ der /g, " ")
    .replace(/ die /g, " ")
    .replace(/ das /g, " ")
    .replace(/wies/g, "wie es")
    .replace(/bitte /g, "")
    .replace(/ bitte/g, "")
    .replace(/bisch/g, "bist du");

  if (compare(utterances, answers, text)) {
    // Search for exact match in triggers
    product = compare(utterances, answers, text);
  } 
  else {
    product = alternatives[Math.floor(Math.random() * alternatives.length)];
  }

  addChatEntry(input, product);
}

function compare(utterancesArray, answersArray, string) {
  let reply;
  let replyFound = false;
  for (let x = 0; x < utterancesArray.length; x++) {
    for (let y = 0; y < utterancesArray[x].length; y++) {
      if (utterancesArray[x][y] === string) {
        let replies = answersArray[x];
        reply = replies[Math.floor(Math.random() * replies.length)];
        replyFound = true;
        break;
      }
    }
    if (replyFound) {
      break;
    }
  }
  return reply;
}

function addChatEntry(input, product) {
  const messagesContainer = document.getElementById("messages");
  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.className = "user response";
  userDiv.innerHTML = `<span>${input}</span>`;
  messagesContainer.appendChild(userDiv);

  let botDiv = document.createElement("div");
  let botText = document.createElement("span");
  botDiv.id = "bot";
  botDiv.className = "bot response";
  botText.innerText = "Bot schreibt...";
  botDiv.appendChild(botText);
  messagesContainer.appendChild(botDiv);

  messagesContainer.scrollTop =
    messagesContainer.scrollHeight - messagesContainer.clientHeight;

  setTimeout(() => {
    botText.innerText = `${product}`;
  }, 2000);
}


const utterances = [ 
    ["wie gehts", "wie laufts", "gehts gut", ""],        //0
    ["hi", "hey", "hallo", "hello", "guten morgen", "guten abend", "eyo", "yo", "jo", "sali"],      //1
    ["was machst du", "was passiert", "was ist los", "wie gehts", "wie geht es dir", "wie gahts",
  "alles klar", "alles klar bei dir", "alles easy", "fit?"],      //2
    ["wie alt bist du"],					//3
    ["wer bist du", "bist du ein mensch", "bist du ein bot", "bist du ein mensch oder ein bot"],   //4
    ["von wo kommst du"],					//5
    ["!"] //6
    
];
   
  
   
  const answers = [
     [
      "Super... und dir?",
      "Ganz ok, wie gehts dir?",
      "Fantastisch, dir?"
    ],                                                                                  	//0
    [
      "Hello!", "Hi!", "Hey!", "Hi there!", "Sali", "Woahh ehy"
    ],						//1
    [
      "Nicht viel",
      "Gehe bald in den Ruhemodus",
      "Was denkst du denn eigentlich?",
      "Hmmmm keine Ahnung wenn ichs mir recht überlege"
    ],						//2
    ["Ich bin lebendig wie du es auch bist"],					//3
    ["Bin nur ein Bot", "Ich bin ein Bot und du?"],	//4
    ["Ich komme aus der Schweiz", "Aus der Vergangenheit. Du?"],	//5
    [""]
  
   
  ];
   
   
  const alternatives = [
    "Was...",
    "Nicht verstanden",
  ];
  
  const SerpApi = require('google-search-results-nodejs');
  const search = new SerpApi.GoogleSearch("6ff037402b3c1a4fbe0eb6ec7c1b91415780282144d83f108ab35f22d219daa7");
  
  const params = {
    q: "Coffee",
    location: "Zurich, Switzerland",
    hl: "ger",
    google_domain: "google.com"
  };
  
  const callback = function(data) {
    console.log(data);
  };
  
  // Show result as JSON
  search.json(params, callback);
  