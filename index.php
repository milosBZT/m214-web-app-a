<!DOCTYPE html>
<html>
<head>
  <title>web-app-a</title>
</head>

<body>

<style>
#container {
  display: flex;
  width: 60%;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  background: #f5f5f5;
  color: #444444;
  font-family: "Arial";
  justify-content: center;
  border-radius: 3px;
  box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.3);
  transition-duration: 200ms;
}

#container:hover {
  transform: scale(0.95);
  transition-duration: 300ms;
}

span {
  color: green;
}
</style>
  
  <div id="container">
    <h1>Hello from web-app-<span>a</span></h1>
  </div>
</body>
</html> 
