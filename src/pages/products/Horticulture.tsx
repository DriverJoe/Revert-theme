import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import horticultureImage from "@/assets/horticulture.jpg";
import { Leaf, Flower2, TreeDeciduous, Apple } from "lucide-react";

const Horticulture = () => {
  const solutions = [
    {
      icon: Flower2,
      title: "Ornamental Plants",
      description: "Specialized care for flowers and decorative plants",
    },
    {
      icon: TreeDeciduous,
      title: "Tree & Shrub Care",
      description: "Comprehensive solutions for woody ornamentals",
    },
    {
      icon: Apple,
      title: "Fruit Production",
      description: "Optimized nutrition for high-quality fruit crops",
    },
    {
      icon: Leaf,
      title: "Vegetable Growing",
      description: "Advanced solutions for commercial vegetable production",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-center"
          style={{ backgroundImage: `url(${horticultureImage})` }}
        >
          <div className="absolute inset-0 bg-primary/80" />
        </div>
        <div className="container relative z-10 text-center text-primary-foreground">
          <h1 className="text-5xl md:text-6xl font-bold mb-4">Horticulture Solutions</h1>
          <p className="text-xl md:text-2xl max-w-3xl mx-auto">
            Specialized solutions for horticultural excellence and quality
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
            <h2 className="text-3xl font-bold mb-6">Excellence in Every Bloom</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground">
              <p>
                Our horticultural solutions are tailored to meet the unique demands of commercial and specialty crop production. Whether growing ornamentals, fruits, or vegetables, our products ensure vibrant color, exceptional quality, and maximum shelf life.
              </p>
              <p>
                With decades of research backing our formulations, we provide the precision nutrition and protection that modern horticulture demands.
              </p>
            </div>
            <div className="mt-8 flex gap-4">
              <Button asChild size="lg">
                <Link to="/contact">Get Started</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/distributor">Find A Distributor</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default Horticulture;
