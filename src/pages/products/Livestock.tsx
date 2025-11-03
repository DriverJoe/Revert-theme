import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import livestockImage from "@/assets/livestock.jpg";
import { Heart, Activity, Droplets, Shield } from "lucide-react";

const Livestock = () => {
  const solutions = [
    {
      icon: Heart,
      title: "Animal Health",
      description: "Comprehensive health management for optimal livestock wellbeing",
    },
    {
      icon: Activity,
      title: "Performance Enhancement",
      description: "Natural solutions to improve growth and productivity",
    },
    {
      icon: Droplets,
      title: "Nutrition Supplements",
      description: "Balanced nutritional support for every life stage",
    },
    {
      icon: Shield,
      title: "Disease Prevention",
      description: "Proactive measures to maintain herd health",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-center"
          style={{ backgroundImage: `url(${livestockImage})` }}
        >
          <div className="absolute inset-0 bg-primary/80" />
        </div>
        <div className="container relative z-10 text-center text-primary-foreground">
          <h1 className="text-5xl md:text-6xl font-bold mb-4">Livestock Solutions</h1>
          <p className="text-xl md:text-2xl max-w-3xl mx-auto">
            Comprehensive care for healthy and productive livestock
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
            <h2 className="text-3xl font-bold mb-6">Healthy Animals, Sustainable Farming</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground">
              <p>
                Our livestock solutions focus on animal welfare and sustainable farming practices. We provide innovative products that support natural growth, enhance immune function, and reduce the need for conventional interventions.
              </p>
              <p>
                From dairy to beef, poultry to swine, our solutions are designed to meet the specific needs of different livestock operations while maintaining the highest standards of animal welfare.
              </p>
            </div>
            <div className="mt-8 flex gap-4">
              <Button asChild size="lg">
                <Link to="/contact">Learn More</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/research/case-studies">View Case Studies</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default Livestock;
