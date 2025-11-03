import { Button } from "@/components/ui/button";
import { Card, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { Bug, Target, Microscope, LeafyGreen } from "lucide-react";

const PestManagement = () => {
  const solutions = [
    {
      icon: Bug,
      title: "Insect Control",
      description: "Targeted solutions for effective insect management",
    },
    {
      icon: LeafyGreen,
      title: "Disease Management",
      description: "Comprehensive disease prevention and control",
    },
    {
      icon: Microscope,
      title: "Biological Control",
      description: "Natural predators and biological agents for sustainable pest management",
    },
    {
      icon: Target,
      title: "Integrated Solutions",
      description: "Holistic IPM strategies combining multiple approaches",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="relative h-[400px] flex items-center justify-center bg-gradient-to-r from-primary to-accent">
        <div className="container relative z-10 text-center text-primary-foreground">
          <h1 className="text-5xl md:text-6xl font-bold mb-4">Pest Management</h1>
          <p className="text-xl md:text-2xl max-w-3xl mx-auto">
            Integrated pest management for sustainable crop protection
          </p>
        </div>
      </section>

      <section className="py-16 bg-background">
        <div className="container">
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            {solutions.map((solution, index) => (
              <Card key={index}>
                <CardHeader>
                  <solution.icon className="h-12 w-12 text-accent mb-4" />
                  <CardTitle>{solution.title}</CardTitle>
                  <CardDescription>{solution.description}</CardDescription>
                </CardHeader>
              </Card>
            ))}
          </div>

          <div className="max-w-4xl mx-auto">
            <h2 className="text-3xl font-bold mb-6">Sustainable Pest Control</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground">
              <p>
                Our integrated pest management (IPM) approach combines cultural, biological, and chemical controls to provide effective, sustainable pest management. We prioritize solutions that minimize environmental impact while maximizing crop protection.
              </p>
              <p>
                By monitoring pest populations, understanding pest lifecycles, and applying targeted treatments only when necessary, we help farmers reduce costs and environmental impact while maintaining healthy, productive crops.
              </p>
            </div>
            <div className="mt-8 flex gap-4">
              <Button asChild size="lg">
                <Link to="/contact">Consult An Expert</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/research/innovation">Our Research</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default PestManagement;
