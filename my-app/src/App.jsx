import React, { useState } from "react";
import "./App.css";

import Todo from "./components/Todo.jsx";
import Shopping from "./components/Shopping.jsx";
import Movies from "./components/Movies.jsx";
import Books from "./components/Books.jsx";
import Assignments from "./components/Assignments.jsx";
import Travel from "./components/Travel";
import Courses from "./components/Courses.jsx";

function App() {
  const [active, setActive] = useState("Todo");

  const renderComponent = () => {
    switch (active) {
      case "Shopping": return <Shopping />;
      case "Movies": return <Movies />;
      case "Books": return <Books />;
      case "Assignments": return <Assignments />;
      case "Travel": return <Travel />;
      case "Courses": return <Courses />;
      default: return <Todo />;
    }
  };

  return (
    <div className="container">
      <h1>React Multi App</h1>
      <h1>By Suhana</h1>

      <div>
        <button className="nav-btn" onClick={() => setActive("Todo")}>To-Do</button>
        <button className="nav-btn" onClick={() => setActive("Shopping")}>Shopping</button>
        <button className="nav-btn" onClick={() => setActive("Movies")}>Movies</button>
        <button className="nav-btn" onClick={() => setActive("Books")}>Books</button>
        <button className="nav-btn" onClick={() => setActive("Assignments")}>Assignments</button>
        <button className="nav-btn" onClick={() => setActive("Travel")}>Travel</button>
        <button className="nav-btn" onClick={() => setActive("Courses")}>Courses</button>
      </div>

      {renderComponent()}
    </div>
  );
}

export default App;
