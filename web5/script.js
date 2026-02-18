function showBrowser() {
    document.getElementById("info").textContent = "Браузер: " + navigator.userAgent;
  }
  
  function showOS() {
    document.getElementById("info").textContent = "Операционная система: " + navigator.platform;
  }
  
  function showScreenSize() {
    document.getElementById("info").textContent = 
      "Размер экрана: " + screen.width + " x " + screen.height + " пикселей";
  }
  
  function showAvailableSize() {
    document.getElementById("info").textContent = 
      "Доступная область экрана: " + screen.availWidth + " x " + screen.availHeight + " пикселей";
  }
  
  function showColorDepth() {
    document.getElementById("info").textContent = "Глубина цвета: " + screen.colorDepth + " бит";
  }
  
  function showConnection() {
    let status = navigator.onLine ? "есть соединение с интернетом" : "нет подключения";
    document.getElementById("info").textContent = "Статус сети: " + status;
  }
  
  function showLanguage() {
    document.getElementById("info").textContent = "Предпочтительный язык: " + navigator.language;
  }
  
  function showURL() {
    document.getElementById("info").textContent = "Текущий URL: " + location.href;
  }
  
  function showProtocol() {
    document.getElementById("info").textContent = "Протокол: " + location.protocol;
  }
  
  function showHost() {
    document.getElementById("info").textContent = "Хост: " + location.host;
  }
  