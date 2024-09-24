import React from 'react'
import '../Header.css';
export default function Form() {
    return (
        <>
            <div className='main-section' >
                <p className='travel-text'>No matter where you’re going to, we’ll take you there</p>
                <div className='form-section'>

                    <form className="form-inline col-md-offset-2 col-md-11 ml-4 " action="#">
                        <div className="form-group m-1">
                            {/* <input type="email" className="form-control" id="email" placeholder="Your email" /> */}
                            <select className="form-control" id="depart-from" aria-label="Email dropdown">
                                <option value="" disabled selected>Depart From</option>
                                <option value="Pune">Pune</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Latur">Latur</option>
                                <option value="Solapur">Solapur</option>
                            </select>

                        </div>
                        <div className="form-group  m-1">
                            <select className="form-control" id="depart-from" aria-label="Email dropdown">
                                <option value="" disabled selected>Going To</option>
                                <option value="Pune">Pune</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Latur">Latur</option>
                                <option value="Solapur">Solapur</option>
                            </select>
                        </div>
                        <div className="form-group  mr-4">
                            <input type="date" className="form-control" id="password" placeholder="Departure Date" />
                        </div>

                        <button type="submit" className="btn btn-primary">Search Buses</button>
                    </form>
                </div>
            </div>
        </>
    )
}
