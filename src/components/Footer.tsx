import { Link } from "react-router-dom";
import { Facebook, Linkedin, Instagram, Mail } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";

const Footer = () => {
  return (
    <footer className="bg-primary text-primary-foreground">
      <div className="container py-12">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Brand */}
          <div>
            <h3 className="text-2xl font-bold mb-4">ReVert</h3>
            <p className="text-sm opacity-90 mb-4">
              Innovating Agriculture for a Sustainable Future
            </p>
            <div className="flex gap-3">
              <a
                href="https://facebook.com"
                target="_blank"
                rel="noopener noreferrer"
                className="hover:opacity-80 transition-opacity"
              >
                <Facebook className="h-5 w-5" />
              </a>
              <a
                href="https://linkedin.com"
                target="_blank"
                rel="noopener noreferrer"
                className="hover:opacity-80 transition-opacity"
              >
                <Linkedin className="h-5 w-5" />
              </a>
              <a
                href="https://instagram.com"
                target="_blank"
                rel="noopener noreferrer"
                className="hover:opacity-80 transition-opacity"
              >
                <Instagram className="h-5 w-5" />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-semibold mb-4">Quick Links</h4>
            <ul className="space-y-2 text-sm">
              <li>
                <Link to="/about" className="hover:opacity-80 transition-opacity">
                  About Us
                </Link>
              </li>
              <li>
                <Link to="/distributor" className="hover:opacity-80 transition-opacity">
                  Find A Distributor
                </Link>
              </li>
              <li>
                <Link to="/technical-sheets" className="hover:opacity-80 transition-opacity">
                  Technical Sheets
                </Link>
              </li>
              <li>
                <Link to="/contact" className="hover:opacity-80 transition-opacity">
                  Contact Us
                </Link>
              </li>
            </ul>
          </div>

          {/* Products */}
          <div>
            <h4 className="font-semibold mb-4">Products</h4>
            <ul className="space-y-2 text-sm">
              <li>
                <Link to="/products/crop-solutions" className="hover:opacity-80 transition-opacity">
                  Crop Solutions
                </Link>
              </li>
              <li>
                <Link to="/products/horticulture" className="hover:opacity-80 transition-opacity">
                  Horticulture
                </Link>
              </li>
              <li>
                <Link to="/products/livestock" className="hover:opacity-80 transition-opacity">
                  Livestock Solutions
                </Link>
              </li>
              <li>
                <Link to="/products/pest-management" className="hover:opacity-80 transition-opacity">
                  Pest Management
                </Link>
              </li>
            </ul>
          </div>

          {/* Newsletter */}
          <div>
            <h4 className="font-semibold mb-4">Newsletter</h4>
            <p className="text-sm opacity-90 mb-4">
              Stay updated with our latest innovations and sustainable solutions.
            </p>
            <form className="space-y-2">
              <Input
                type="email"
                placeholder="Your email"
                className="bg-primary-foreground/10 border-primary-foreground/20 text-primary-foreground placeholder:text-primary-foreground/60"
              />
              <Button
                type="submit"
                variant="secondary"
                className="w-full"
              >
                Subscribe
              </Button>
            </form>
          </div>
        </div>

        <div className="border-t border-primary-foreground/20 mt-8 pt-8 text-center text-sm opacity-80">
          <p>&copy; {new Date().getFullYear()} ReVert. All rights reserved.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
