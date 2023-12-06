import React from 'react';
import { Modal, Button, Form } from "react-bootstrap";

const CityDetailsModal = ({ city, modalShow, modalClose }) => {
    return (
        <Modal show={modalShow} onHide={modalClose} dialogClassName="modal-dialog-scrollable">
            <Modal.Header >
                <Modal.Title>City Details</Modal.Title>
                <p onClick={modalClose}>X</p>
            </Modal.Header>
            <Modal.Body>
                <table className='table table-bordered'>
                    <tbody>
                        <tr>
                            <th>City</th>
                            <td>{city.city ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>City Ascii</th>
                            <td>{city.city_ascii ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>State ID</th>
                            <td>{city.state_id ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>State Name</th>
                            <td>{city.state_name ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>County Fips</th>
                            <td>{city.county_fips ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>County Name</th>
                            <td>{city.county_name ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Lat</th>
                            <td>{city.lat ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Lng</th>
                            <td>{city.lng ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Population</th>
                            <td>{city.population ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Density</th>
                            <td>{city.density ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Source</th>
                            <td>{city.source ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Military</th>
                            <td>{city.military ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Incorporated</th>
                            <td>{city.incorporated ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Timezone</th>
                            <td>{city.timezone ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Ranking</th>
                            <td>{city.ranking ?? 'N/A'}</td>
                        </tr>
                        <tr>
                            <th>Zips</th>
                            <td>{city.zips ?? 'N/A'}</td>
                        </tr>
                    </tbody>
                </table>
            </Modal.Body>
            <Modal.Footer>
                <Button variant="secondary" onClick={modalClose}>
                    Close
                </Button>
            </Modal.Footer>
        </Modal>
      );
};

export default CityDetailsModal;