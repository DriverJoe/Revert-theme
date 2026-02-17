/**
 * Alpine.js Components
 *
 * @package ReVert
 * @since 1.0.0
 */

/**
 * Distributor Locator Component
 */
function distributorLocator() {
    return {
        searchTerm: '',
        selectedRegion: '',
        loading: false,

        searchDistributors() {
            const resultsContainer = document.getElementById('distributor-results');
            if (!resultsContainer) return;

            this.loading = true;
            resultsContainer.innerHTML = '<p class="col-span-2 text-center text-muted-foreground py-8">Searching...</p>';

            const formData = new FormData();
            formData.append('action', 'search_distributors');
            formData.append('search', this.searchTerm);
            formData.append('region', this.selectedRegion);
            formData.append('nonce', revertAjax.nonce);

            fetch(revertAjax.ajaxurl, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                this.loading = false;
                if (data.success) {
                    resultsContainer.innerHTML = data.data.html;
                } else {
                    resultsContainer.innerHTML = '<p class="col-span-2 text-center text-destructive py-8">Error loading distributors. Please try again.</p>';
                }
            })
            .catch(error => {
                this.loading = false;
                console.error('Error:', error);
                resultsContainer.innerHTML = '<p class="col-span-2 text-center text-destructive py-8">Error loading distributors. Please check your connection and try again.</p>';
            });
        },

        init() {
            // Load all distributors initially
            this.searchDistributors();
        }
    }
}

/**
 * Newsletter Form Component
 */
function newsletterForm() {
    return {
        email: '',
        loading: false,
        message: '',
        success: false,

        submitNewsletter() {
            if (!this.email || !this.validateEmail(this.email)) {
                this.message = 'Please enter a valid email address.';
                this.success = false;
                return;
            }

            this.loading = true;
            this.message = '';

            const formData = new FormData();
            formData.append('action', 'newsletter_subscribe');
            formData.append('email', this.email);
            formData.append('nonce', revertAjax.nonce);

            fetch(revertAjax.ajaxurl, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                this.loading = false;
                if (data.success) {
                    this.message = data.data.message;
                    this.success = true;
                    this.email = '';
                } else {
                    this.message = data.data.message || 'An error occurred. Please try again.';
                    this.success = false;
                }
            })
            .catch(error => {
                this.loading = false;
                console.error('Error:', error);
                this.message = 'An error occurred. Please try again.';
                this.success = false;
            });
        },

        validateEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    }
}

/**
 * Contact Form Component
 */
function contactForm() {
    return {
        formData: {
            name: '',
            email: '',
            phone: '',
            subject: '',
            message: ''
        },
        loading: false,
        responseMessage: '',
        success: false,

        submitForm() {
            // Validate required fields
            if (!this.formData.name || !this.formData.email || !this.formData.subject || !this.formData.message) {
                this.responseMessage = 'Please fill in all required fields.';
                this.success = false;
                return;
            }

            if (!this.validateEmail(this.formData.email)) {
                this.responseMessage = 'Please enter a valid email address.';
                this.success = false;
                return;
            }

            this.loading = true;
            this.responseMessage = '';

            const formPayload = new FormData();
            formPayload.append('action', 'revert_contact');
            formPayload.append('contact_nonce', document.querySelector('[name="contact_nonce"]').value);
            Object.keys(this.formData).forEach(key => {
                formPayload.append(key, this.formData[key]);
            });

            fetch(revertAjax.ajaxurl, {
                method: 'POST',
                body: formPayload
            })
            .then(response => response.json())
            .then(data => {
                this.loading = false;
                if (data.success) {
                    this.responseMessage = data.data.message;
                    this.success = true;
                    // Reset form
                    this.formData = {
                        name: '',
                        email: '',
                        phone: '',
                        subject: '',
                        message: ''
                    };
                } else {
                    this.responseMessage = data.data.message || 'An error occurred. Please try again.';
                    this.success = false;
                }
            })
            .catch(error => {
                this.loading = false;
                console.error('Error:', error);
                this.responseMessage = 'An error occurred. Please try again.';
                this.success = false;
            });
        },

        validateEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    }
}
