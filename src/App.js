import React from "react";
import Navbar from "./Component/Navbar";
import BackgroundImg from "../src/Assets/images/background-image.png";
import "./Header.css";
import Form from "./Component/Form";
import Services from "./Component/Services";

function App() {
  return (
    <>
      <Navbar />
      <Form />
      <div className="container">
        <div className="services text-center">
          <p className="services-sub-hed">CATEGORY</p>
          <p className="services-hedding">We Offer Best Services</p>
          <div class="row" style={{ width: "100%" }}>
            <Services />
            <Services />
            <Services />
            <Services />

          </div>
        </div>
      </div>
    </>
  );
}

export default App;
