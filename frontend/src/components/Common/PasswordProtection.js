'use client';

import { useState } from 'react';
import { Eye, EyeOff } from 'lucide-react';
import { DivTag, H1Tag, PTag, SectionTag } from './HTMLTags';

export default function PasswordProtection({ onSubmit, error }) {
  const [password, setPassword] = useState('');
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [showPassword, setShowPassword] = useState(false);

  const handleSubmit = async (e) => {
    e.preventDefault();
    setIsSubmitting(true);
    await onSubmit(password);
    setIsSubmitting(false);
  };

  return (
    <SectionTag className="password-section">
      <DivTag className="container">
        <DivTag className="row">
          <DivTag className="col-md-12">
            <DivTag className="password-form-wrapper">
              <H1Tag className="text-center mb-4">Protected Content</H1Tag>
              <PTag className="text-center mb-4">
                This content is password protected. Please enter your password to view.
              </PTag>

              <form className="comment-form" onSubmit={handleSubmit}>
                <DivTag className="mb-3 password-input-wrapper">
                  <input
                    type={showPassword ? 'text' : 'password'}
                    className="form-control password-input"
                    placeholder="Enter password"
                    value={password}
                    onChange={(e) => setPassword(e.target.value)}
                    disabled={isSubmitting}
                    required
                    autoFocus
                  />

                  <button
                    type="button"
                    onClick={() => setShowPassword(!showPassword)}
                    className="password-toggle-btn"
                    tabIndex={-1}
                  >
                    {showPassword ? <EyeOff size={20} /> : <Eye size={20} />}
                  </button>
                </DivTag>

                {error && (
                  <DivTag className="validation-errors text-danger" role="alert">
                    {error}
                  </DivTag>
                )}

                <DivTag className="btn-div">
                  <button
                    type="submit"
                    className="primary-btn"
                    disabled={isSubmitting}
                  >
                    {isSubmitting ? 'Verifying...' : 'Submit'}
                  </button>
                </DivTag>
              </form>
            </DivTag>
          </DivTag>
        </DivTag>
      </DivTag>
    </SectionTag>
  );
}
