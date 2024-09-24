import React from 'react'

export default function Navbar() {
    return (
        <>
            <nav className="navbar navbar-expand-lg navbar-light bg-white sticky-top">
                <a className="navbar-brand" href="#">Travel</a>
                <button
                    className="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse " id="navbarSupportedContent">
                    {/* Add ml-auto to push the nav items to the right */}
                    <ul className="navbar-nav ml-auto ">
                        <li className="nav-item p-1">
                            <a className="nav-link active" href="#">Home</a>
                        </li>
                        <li className="nav-item p-1">
                            <a className="nav-link" href="#">About</a>
                        </li>
                        <li className="nav-item p-1">
                            <a className="nav-link" href="#">Services</a>
                        </li>
                        <li className="nav-item p-1">
                            <button type="button" className="btn btn-primary">Book Ticket</button>
                        </li>
                    </ul>
                </div>
            </nav>
        </>
    )
}
