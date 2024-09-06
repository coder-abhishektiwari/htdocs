import React, { useState } from 'react';

const App = () => {
  const [isSignUp, setIsSignUp] = useState(true);

  const handleToggle = () => {
    setIsSignUp(!isSignUp);
  };

  return (
    <div className="container">
      <h1>{isSignUp ? 'Sign Up' : 'Sign In'}</h1>
      {isSignUp ? (
        <SignUpForm />
      ) : (
        <SignInForm />
      )}
      <button onClick={handleToggle}>
        {isSignUp ? 'Already have an account? Sign In' : 'Need an account? Sign Up'}
      </button>
    </div>
  );
};

const SignUpForm = () => (
  <form>
    <div>
      <label htmlFor="signupEmail">Email:</label>
      <input type="email" id="signupEmail" />
    </div>
    <div>
      <label htmlFor="signupPassword">Password:</label>
      <input type="password" id="signupPassword" />
    </div>
    <button type="submit">Sign Up</button>
  </form>
);

const SignInForm = () => (
  <form>
    <div>
      <label htmlFor="signinEmail">Email:</label>
      <input type="email" id="signinEmail" />
    </div>
    <div>
      <label htmlFor="signinPassword">Password:</label>
      <input type="password" id="signinPassword" />
    </div>
    <button type="submit">Sign In</button>
  </form>
);

export default App;
