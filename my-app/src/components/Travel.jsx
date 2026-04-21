import React, { useState } from "react";
import "./List.css";

function Travel() {
  const [input, setInput] = useState("");
  const [items, setItems] = useState([]);

  const addItem = () => {
    if (input === "") return;
    setItems([...items, { text: input, done: false }]);
    setInput("");
  };

  const deleteItem = (index) => {
    const newItems = items.filter((_, i) => i !== index);
    setItems(newItems);
  };

  const toggleDone = (index) => {
    const newItems = [...items];
    newItems[index].done = !newItems[index].done;
    setItems(newItems);
  };

  return (
    <div className="box">
      <h2>Travel List</h2>

      <input
        value={input}
        onChange={(e) => setInput(e.target.value)}
        placeholder="Enter destination"
      />
      <button className="add-btn" onClick={addItem}>Add</button>

      <ul>
        {items.map((item, index) => (
          <li key={index} className={item.done ? "done" : ""}>
            {item.text}
            <button className="action-btn" onClick={() => toggleDone(index)}>✔</button>
            <button className="action-btn" onClick={() => deleteItem(index)}>❌</button>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default Travel;
