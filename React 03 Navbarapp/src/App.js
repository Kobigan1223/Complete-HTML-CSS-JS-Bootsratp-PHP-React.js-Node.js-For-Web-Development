import { Navbar,Nav,Container,Button } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';  
import './App.css';

function App() {
  return (
    <div className="App">
     <Navbar bg="light" expand="lg">
  <Container>
    <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
    <Navbar.Toggle aria-controls="basic-navbar-nav" />
    <Navbar.Collapse id="basic-navbar-nav">
      <Nav className="me-auto">
        <Nav.Link href="#home">Home</Nav.Link>
        <Nav.Link href="#link">shop</Nav.Link>
        <Nav.Link href="#link">product</Nav.Link>
      </Nav>

      <Nav.Link>  <Button variant="danger">Danger</Button></Nav.Link>
      <Nav.Link>Sigin</Nav.Link>

    </Navbar.Collapse>

  </Container>
</Navbar>
    </div>
  );
}
export default App;
