const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const message = document.getElementById("message");
const output = document.getElementById("result");
const image1 = document.getElementById("image1");

startRecognition = () => {
  if (SpeechRecognition !== undefined) { 
    let recognition = new SpeechRecognition();
    recognition.lang =  'nl-NL'; 
    recognition.interimResults = false; 
    recognition.continuous = false; 
   
    recognition.onstart = () => {
      message.innerPHP = `Starting listening, speak in the microphone please<br>Say "help me" for help`;
      output.classList.add("hide"); 
    };

    recognition.onspeechend = () => {
      message.innerPHP = `I stopped listening `;
      recognition.stop();
    };

    recognition.onresult = (result) => {
      let transcript = result.results[0][0].transcript;
      let confidenceTranscript= Math.floor(result.results[0][0].confidence * 100); 
      output.classList.remove("hide"); 
      output.innerHTML = `I'm ${confidenceTranscript}% certain you just said: <b>${transcript}</b>`;
      actionSpeech(transcript);
    };

    recognition.start();
  } 
  else {  
    message.innerHTML = "sorry speech to text is not supported in this browser";
  }
};


actionSpeech = (speechText) => {
  speechText = speechText.toLowerCase().trim(); 
  console.log(speechText); 
  switch(speechText){ 
    case "black":
      document.body.style.background = "#000000";
      document.body.style.color="#FFFFFF";
      break;
    case  "reset":
      document.body.style.background = "#ffe6ab";
      document.body.style.color="#000000";
      image1.classList.add("hide"); 
      break;
    case "image": 
    case "caroline": 
      image1.src = "./img/caroline.jpg";
      image1.style.width = "400px";
      image1.classList.remove("hide") 
      break;
    case "github": 
      window.open("https://github.com/HalilDogan7007", "_self");
      break;
    case "link":
        window.open("https://www.linkedin.com/in/halil-dogan-9016b91a4/");
        break;
    case "help me":
      alert("Valid speech commands: black,  reset, next page");
      break;
      case "over mij": 
      window.open("https://designhd.nl/#services", "_self");
      break;
        case "projecten": 
        window.open("https://designhd.nl/#projects", "_self");
        break;
          case "web": 
          window.open("https://designhd.nl/#about", "_self");
          break;
            case "github": 
            window.open("https://designhd.nl/#formulier2", "_self");
            break;
              case "over mij": 
              window.open("https://designhd.nl/#contact", "_self");
              break;
              case "volgende": 
              window.open("https://designhd.nl/index-engels.html", "_self");
              break;
              default:

      
  }
}

