import React, { useState } from 'react';
import CityDetailsModal from './CityDetailsModal';
import './UcCity.css';

const UsCity = ({city}) => {  

    const [modalShow, setModalShow] = useState(false);

    const handleShowModal = () => {
      setModalShow(true);
    }
    const modalClose = () => setModalShow(false);
    
    return (
        <div className="card shadow bg-white rounded">
          <div className="card-body">
            <h4 className="card-title text-center">{city.city ?? 'N/A'}</h4>
            <table className='table table-sm table-bordered'>
              <tbody>
                <tr>
                    <th>State Name </th>
                    <td>{city.state_name ?? 'N/A'}</td>
                </tr>
                <tr>
                    <th>County Name </th>
                    <td>{city.county_name ?? 'N/A'}</td>
                </tr>
                <tr>
                    <th>Population </th>
                    <td>{city.population ?? 'N/A'}</td>
                </tr>
              </tbody>
            </table>
            <div>
                <button onClick={handleShowModal} className='btn btn-sm btn-secondary float-right'>Details</button>
            </div>
            {modalShow && <CityDetailsModal city={city} modalShow={modalShow} modalClose={modalClose} />}
          </div>
        </div>
        
      );
};

export default UsCity;