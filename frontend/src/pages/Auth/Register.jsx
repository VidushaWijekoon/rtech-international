import React from "react";
import { Link } from "react-router-dom";
import "./style.css";

import FacebookIcon from "@mui/icons-material/Facebook";
import TwitterIcon from "@mui/icons-material/Twitter";
import GoogleIcon from "@mui/icons-material/Google";

import HomeIcon from "@mui/icons-material/Home";

const Register = () => {
  return (
    <section className="vh-100">
      <Link to="/">
        <HomeIcon sx={{ margin: "10px" }} />
      </Link>
      <div className="container-fluid h-custom">
        <div className="row d-flex justify-content-center align-items-center h-100">
          <div className="col-md-9 col-lg-6 col-xl-5">
            <img
              src={
                "https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              }
              className="img-fluid"
              alt="Sample image"
            />
          </div>
          <div className="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form>
              <div className="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p className="lead fw-normal mb-0 me-3">Sign in with</p>
                <button
                  type="button"
                  className="btn btn-primary btn-floating mx-1"
                >
                  <TwitterIcon />
                </button>

                <button
                  type="button"
                  className="btn btn-primary btn-floating mx-1"
                >
                  <FacebookIcon />
                </button>

                <button
                  type="button"
                  className="btn btn-primary btn-floating mx-1"
                >
                  <GoogleIcon />
                </button>
              </div>

              <div className="divider d-flex align-items-center my-4">
                <p className="text-center fw-bold mx-3 mb-0">Or</p>
              </div>

              <div className="form-outline mb-4">
                <label className="form-label" for="form3Example3">
                  Fullname
                </label>
                <input
                  type="email"
                  id="form3Example3"
                  className="form-control"
                  placeholder="Please Enter Your Fullname"
                />
              </div>

              <div className="form-outline mb-4">
                <label className="form-label" for="form3Example3">
                  Username
                </label>
                <input
                  type="email"
                  id="form3Example3"
                  className="form-control"
                  placeholder="Enter a valid Username"
                />
              </div>

              <div className="form-outline mb-3">
                <label className="form-label" for="form3Example4">
                  Password
                </label>
                <input
                  type="password"
                  id="form3Example4"
                  className="form-control"
                  placeholder="Enter password"
                />
              </div>

              <div className="d-flex justify-content-between align-items-center">
                <div className="form-check mb-0">
                  <input
                    className="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                  />
                  <label className="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <Link className="text-body text-danger">Forgot password?</Link>
              </div>

              <div className="text-center text-lg-start mt-4 pt-2">
                <button type="button" className="btn btn-primary btn-lg btn-sm">
                  Register
                </button>
                <p className="small fw-bold mt-2 pt-1 mb-0">
                  If you already has account?
                  <Link to="/login" className="link-danger mx-2">
                    Login
                  </Link>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Register;