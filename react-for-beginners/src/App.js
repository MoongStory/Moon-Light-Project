import Home from "./routes/Home";
import Detail from "./routes/Detail";

import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />}></Route>
        <Route path="/movie/:id" element={<Detail />}></Route>
        <Route path="/hello" element={<h1>Hello</h1>}></Route>
      </Routes>
    </Router>
  );
}

export default App;
