import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import cropImage from "@/assets/crop-solutions.jpg";
import { Sprout, Shield, Droplet, TrendingUp } from "lucide-react";

const CropSolutions = () => {
  const solutions = [
    {
      icon: Shield,
      title: "Crop Protection",
      description: "Advanced protection against diseases, pests, and environmental stress",
    },
    {
      icon: Droplet,
      title: "Nutrition Management",
      description: "Optimized nutrient delivery systems for maximum yield and quality",
    },
    {
      icon: Sprout,
      title: "Growth Enhancement",
      description: "Biological stimulants that promote healthy root and plant development",
    },
    {
      icon: TrendingUp,
      title: "Yield Optimization",
      description: "Proven solutions to maximize crop productivity sustainably",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-center"
          style={{ backgroundImage: `url(${cropImage})` }}
        >
          <div className="absolute inset-0 bg-primary/80" />
        </div>
        <div className="container relative z-10 text-center text-primary-foreground">
          <h1 className="text-5xl md:text-6xl font-bold mb-4">Crop Solutions</h1>
          <p className="text-xl md:text-2xl max-w-3xl mx-auto">
            Advanced protection and nutrition for healthy, productive crops
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
            <h2 className="text-3xl font-bold mb-6">Comprehensive Crop Care</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground">
              <p>
                Our crop solutions are designed to meet the diverse needs of modern agriculture. From seed to harvest, we provide scientifically-proven products that enhance crop health, protect against threats, and optimize yields while maintaining environmental sustainability.
              </p>
              <p>
                Our integrated approach combines the latest in biotechnology with traditional agricultural wisdom, ensuring your crops receive exactly what they need at every growth stage.
              </p>
            </div>
            <div className="mt-8 flex gap-4">
              <Button asChild size="lg">
                <Link to="/contact">Request Information</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/technical-sheets">View Technical Sheets</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default CropSolutions;
