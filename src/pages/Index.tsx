import { Link } from "react-router-dom";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { ArrowRight, Leaf, Sprout, Heart, Microscope } from "lucide-react";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import heroImage from "@/assets/hero-agriculture.jpg";
import cropImage from "@/assets/crop-solutions.jpg";
import horticultureImage from "@/assets/horticulture.jpg";
import livestockImage from "@/assets/livestock.jpg";

const Index = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      {/* Hero Section */}
      <section className="relative h-[600px] flex items-center justify-center overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-center"
          style={{ backgroundImage: `url(${heroImage})` }}
        >
          <div className="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/60" />
        </div>
        <div className="container relative z-10 text-center text-primary-foreground">
          <h1 className="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 animate-fade-in">
            Innovating Agriculture for a Sustainable Future
          </h1>
          <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-95">
            Leading the way in sustainable agricultural solutions that protect our planet and nourish future generations
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" variant="secondary" asChild>
              <Link to="/products/crop-solutions">
                Explore Products <ArrowRight className="ml-2 h-5 w-5" />
              </Link>
            </Button>
            <Button size="lg" variant="outline" asChild className="border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
              <Link to="/about">Learn More</Link>
            </Button>
          </div>
        </div>
      </section>

      {/* Products Overview */}
      <section className="py-20 bg-background">
        <div className="container">
          <div className="text-center mb-12">
            <h2 className="text-4xl font-bold text-foreground mb-4">Our Solutions</h2>
            <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
              Comprehensive agricultural solutions designed for every aspect of modern farming
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <Card className="group hover:shadow-lg transition-shadow cursor-pointer">
              <Link to="/products/crop-solutions">
                <div className="aspect-video overflow-hidden rounded-t-lg">
                  <img
                    src={cropImage}
                    alt="Crop Solutions"
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                  />
                </div>
                <CardHeader>
                  <CardTitle className="flex items-center gap-2">
                    <Sprout className="h-5 w-5 text-accent" />
                    Crop Solutions
                  </CardTitle>
                  <CardDescription>
                    Advanced protection and nutrition for healthy, productive crops
                  </CardDescription>
                </CardHeader>
              </Link>
            </Card>

            <Card className="group hover:shadow-lg transition-shadow cursor-pointer">
              <Link to="/products/horticulture">
                <div className="aspect-video overflow-hidden rounded-t-lg">
                  <img
                    src={horticultureImage}
                    alt="Horticulture"
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                  />
                </div>
                <CardHeader>
                  <CardTitle className="flex items-center gap-2">
                    <Leaf className="h-5 w-5 text-accent" />
                    Horticulture
                  </CardTitle>
                  <CardDescription>
                    Specialized solutions for horticultural excellence and quality
                  </CardDescription>
                </CardHeader>
              </Link>
            </Card>

            <Card className="group hover:shadow-lg transition-shadow cursor-pointer">
              <Link to="/products/livestock">
                <div className="aspect-video overflow-hidden rounded-t-lg">
                  <img
                    src={livestockImage}
                    alt="Livestock Solutions"
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                  />
                </div>
                <CardHeader>
                  <CardTitle className="flex items-center gap-2">
                    <Heart className="h-5 w-5 text-accent" />
                    Livestock Solutions
                  </CardTitle>
                  <CardDescription>
                    Comprehensive care for healthy and productive livestock
                  </CardDescription>
                </CardHeader>
              </Link>
            </Card>

            <Card className="group hover:shadow-lg transition-shadow cursor-pointer">
              <Link to="/products/pest-management">
                <CardHeader className="h-full flex flex-col justify-center">
                  <CardTitle className="flex items-center gap-2">
                    <Microscope className="h-5 w-5 text-accent" />
                    Pest Management
                  </CardTitle>
                  <CardDescription>
                    Integrated pest management for sustainable crop protection
                  </CardDescription>
                  <Button variant="link" className="mt-4 p-0 h-auto">
                    Learn more <ArrowRight className="ml-2 h-4 w-4" />
                  </Button>
                </CardHeader>
              </Link>
            </Card>
          </div>
        </div>
      </section>

      {/* Sustainability Section */}
      <section className="py-20 bg-muted">
        <div className="container">
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-4xl font-bold text-foreground mb-6">
                Committed to Sustainability
              </h2>
              <p className="text-lg text-muted-foreground mb-6">
                Our mission is to develop and deliver innovative agricultural solutions that not only increase productivity but also protect our environment for future generations.
              </p>
              <ul className="space-y-4 mb-8">
                <li className="flex items-start gap-3">
                  <div className="mt-1 rounded-full bg-accent/20 p-1">
                    <Leaf className="h-4 w-4 text-accent" />
                  </div>
                  <div>
                    <h3 className="font-semibold mb-1">Eco-Friendly Products</h3>
                    <p className="text-sm text-muted-foreground">
                      All our solutions are designed with minimal environmental impact
                    </p>
                  </div>
                </li>
                <li className="flex items-start gap-3">
                  <div className="mt-1 rounded-full bg-accent/20 p-1">
                    <Heart className="h-4 w-4 text-accent" />
                  </div>
                  <div>
                    <h3 className="font-semibold mb-1">Community Programs</h3>
                    <p className="text-sm text-muted-foreground">
                      Supporting local communities through education and outreach
                    </p>
                  </div>
                </li>
                <li className="flex items-start gap-3">
                  <div className="mt-1 rounded-full bg-accent/20 p-1">
                    <Microscope className="h-4 w-4 text-accent" />
                  </div>
                  <div>
                    <h3 className="font-semibold mb-1">Continuous Innovation</h3>
                    <p className="text-sm text-muted-foreground">
                      Investing in R&D to develop next-generation solutions
                    </p>
                  </div>
                </li>
              </ul>
              <Button asChild size="lg">
                <Link to="/sustainability">
                  Learn About Our Commitment <ArrowRight className="ml-2 h-5 w-5" />
                </Link>
              </Button>
            </div>
            <div className="bg-card rounded-lg p-8 shadow-lg">
              <h3 className="text-2xl font-bold mb-4">Our Impact</h3>
              <div className="space-y-6">
                <div>
                  <div className="flex justify-between items-baseline mb-2">
                    <span className="text-sm font-medium">Carbon Reduction</span>
                    <span className="text-2xl font-bold text-accent">45%</span>
                  </div>
                  <div className="h-2 bg-muted rounded-full overflow-hidden">
                    <div className="h-full bg-accent rounded-full" style={{ width: "45%" }} />
                  </div>
                </div>
                <div>
                  <div className="flex justify-between items-baseline mb-2">
                    <span className="text-sm font-medium">Water Conservation</span>
                    <span className="text-2xl font-bold text-accent">60%</span>
                  </div>
                  <div className="h-2 bg-muted rounded-full overflow-hidden">
                    <div className="h-full bg-accent rounded-full" style={{ width: "60%" }} />
                  </div>
                </div>
                <div>
                  <div className="flex justify-between items-baseline mb-2">
                    <span className="text-sm font-medium">Soil Health Improvement</span>
                    <span className="text-2xl font-bold text-accent">80%</span>
                  </div>
                  <div className="h-2 bg-muted rounded-full overflow-hidden">
                    <div className="h-full bg-accent rounded-full" style={{ width: "80%" }} />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-primary text-primary-foreground">
        <div className="container text-center">
          <h2 className="text-4xl font-bold mb-6">Ready to Transform Your Agriculture?</h2>
          <p className="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Connect with our experts to find the perfect solutions for your farming needs
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" variant="secondary" asChild>
              <Link to="/contact">Get In Touch</Link>
            </Button>
            <Button size="lg" variant="outline" asChild className="border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
              <Link to="/distributor">Find A Distributor</Link>
            </Button>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default Index;
